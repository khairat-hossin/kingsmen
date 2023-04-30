<?php

namespace App\Http\Controllers\Backend\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Models\Team;

class TeamController extends Controller
{
    use Authorizable;

    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Teams';

        // module name
        $this->module_name = 'teams';

        // directory path of the module
        $this->module_path = 'teams';

        // module icon
        $this->module_icon = 'fas fa-people-group';

        // module model name, path
        $this->module_model = "App\Models\Team";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams= DB::table('team_members')->select('*')->get();
        return view('backend.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return view('backend.teams.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $module_action = 'store';
        $request->validate([
            "first_name"           => "required",
            "last_name"            => "required",
            "date_of_birth"        => "required",
            "passport_number"      => "required|unique:" . $this->module_model . ",passport_number",
            "passport_expiry_date" => "required",
            "passport_photo"       => "required|image",
            "ssn"                  => "required|unique:" . $this->module_model . ",ssn",
            "id_card"              => "required|image",
            "university_degree"    => "required",
            "about_team_member"    => "required",
            "position"             => "required",
            "type"                 => "required",
            "upload_photo"         => "required|image",
            "personal_cell_number" => "required|unique:" . $this->module_model . ",personal_cell_number",
            "personal_email"       => "required",
            "home_address"         => "required",
            "family_member_name"   => "required",
            "work_contract"        => "required"
        ]);

        DB::beginTransaction();
        try {
            $team  = new $this->module_model();

            $passport_photo_url = '';
            if ($request->passport_photo) {
                $passport_photo_url = uploadFileToPublic($request->file('passport_photo'), 'teams/passport');
            }

            $id_card_url = '';
            if ($request->id_card) {
                $id_card_url = uploadFileToPublic($request->file('id_card'), 'teams/id_card');
            }

            $upload_photo_url = '';
            if($request->upload_photo) {
                $upload_photo_url = uploadFileToPublic($request->file('upload_photo'), 'teams/photo');
            }

            $team->first_name           = $request->first_name;
            $team->last_name            = $request->last_name;
            $team->date_of_birth        = date("Y-m-d", strtotime($request->date_of_birth));
            $team->passport_number      = $request->passport_number;
            $team->passport_expiry_date = date("Y-m-d", strtotime($request->passport_expiry_date));
            $team->passport_photo       = $passport_photo_url;
            $team->ssn                  = $request->ssn;
            $team->id_card              = $id_card_url;
            $team->university_degree    = $request->university_degree;
            $team->about_team_member    = $request->about_team_member;
            $team->position             = $request->position;
            $team->type                 = $request->type;
            $team->upload_photo         = $upload_photo_url;
            $team->personal_cell_number = $request->personal_cell_number;
            $team->personal_email       = $request->personal_email;
            $team->assigned_cell_number = $request->assigned_cell_number;
            $team->assigned_email       = $request->assigned_email;
            $team->home_address         = $request->home_address;
            $team->family_member_name   = $request->family_member_name;
            $team->family_member_number = $request->family_member_number;
            $team->work_contract        = $request->work_contract;

            $team->save();

            flash(icon() . ' ' . Str::singular($this->module_title) . " Created Successfully")->success()->important();
            logUserAccess($this->module_title . ' ' . $module_action . ' | Id: ' . $team->id);
            DB::commit();
            return redirect("admin/$this->module_name");

        } catch (\Throwable $th) {
            DB::rollBack();
            $msg = $th->getMessage();
            flash(icon() . ' ' . Str::singular($this->module_title) . " Creation Failed! $msg")->error()->important();
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $team = Team::find($id);

        return view('backend.crowdfundings.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
