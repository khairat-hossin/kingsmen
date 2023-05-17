<?php

namespace App\Http\Controllers\Backend\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Devio\Pipedrive\Pipedrive;
use App\Models\Contact;
use Faker\Provider\ar_EG\Person;
use Carbon\Carbon;

class ContactController extends Controller
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
        $this->module_title = 'contacts';

        // module name
        $this->module_name = 'contacts';

        // directory path of the module
        $this->module_path = 'contacts';

        // module icon
        $this->module_icon = 'fas fa-address-book';

        // module model name, path
        $this->module_model = "App\Models\Contact";
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view_contacts');

        $contacts = DB::table('contacts')->select('*')->get();
        return view('backend.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('add_contacts');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return view('backend.contacts.create', compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

       $request->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable:',
            'email' => 'required|unique:'.$module_model.',email',
            'phone' => 'required|unique:'.$module_model.',phone',
            'id_no' => 'required|unique:'.$module_model.',id_no',
            'client_type' => 'nullable',
            'buisness_position' => 'nullable',
            'budget' => 'nullable',
            'location' => 'nullable',
            'added_date' => 'nullable|date',
            'reffered_by' => 'nullable',
            'note' => 'nullable',
            'date_of_birth' => 'nullable|date',
            'team_member' => 'nullable',
            'project_or_investment' => 'nullable',
            'citizenship' => 'nullable',
            'passport_number' => 'nullable',
            'passport_expiry_date' => 'nullable|date',
            'photo_of_passport' => 'nullable',
            'id_card_text' => 'nullable',
            'photo_of_id_card' => 'nullable',
            'exact_address' => 'nullable',
            'PO_box' => 'nullable',
            'name_of_the_bank_you_work_with' => 'nullable',
            'card_details_for_downpayment' => 'nullable',
            'bank_acc_with_6_month_history' => 'nullable',
            'crypto_wallet' => 'nullable',

        ]);

        $contact = new Contact;

        $photo_of_passport_url = '';
        if ($request->hasFile('photo_of_passport')) {
            $photo_of_passport_url = uploadFileToPublic($request->file('photo_of_passport'), 'contact/photo_of_passport');
            $contact->photo_of_passport = $photo_of_passport_url;
        }

        $photo_of_id_card_url = '';
        if ($request->hasFile('photo_of_id_card')) {
            $photo_of_id_card_url = uploadFileToPublic($request->file('photo_of_id_card'), 'contact/photo_of_id_card');
            $contact->photo_of_id_card = $photo_of_id_card_url;
        }


        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->id_no = $request->id_no;
        $contact->client_type = $request->client_type;
        $contact->buisness_position = $request->buisness_position;
        $contact->budget = $request->budget;
        $contact->location = $request->location;
        $contact->added_date = Carbon::parse($request->added_date)->format('Y-m-d');
        $contact->reffered_by = $request->reffered_by;
        $contact->note = $request->note;
        $contact->date_of_birth = Carbon::parse($request->added_date)->format('Y-m-d');
        $contact->team_member = $request->team_member;
        $contact->project_or_investment = $request->project_or_investment;
        $contact->citizenship = $request->citizenship;
        $contact->passport_number = $request->passport_number;
        $contact->photo_of_passport = $photo_of_passport_url;
        $contact->passport_expiry_date = Carbon::parse($request->added_date)->format('Y-m-d');
        $contact->id_card_text = $request->id_card_text;
        $contact->photo_of_id_card = $photo_of_id_card_url;
        $contact->exact_address = $request->exact_address;
        $contact->PO_box = $request->PO_box;
        $contact->name_of_the_bank_you_work_with = $request->name_of_the_bank_you_work_with;
        $contact->card_details_for_downpayment = $request->card_details_for_downpayment;
        $contact->bank_acc_with_6_month_history = $request->bank_acc_with_6_month_history;
        $contact->crypto_wallet = $request->crypto_walle;

        $contact->save();

        // Add a person of this contact in pipedrive
        $this->addPersonPipeDrive($contact);

        flash(icon().' '.Str::singular($module_title)."' Created.")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }

    /**
     * Add Person Data to Pipedrive
     */
    public function addPersonPipeDrive(Contact $contact){
        // $contact= Contact::find(3);
        $token = env('PIPEDRIVE_TOKEN');
        $pipedrive= new Pipedrive($token);
        $person= $pipedrive->persons()->add([
            'name' => $contact->first_name. " ". $contact->last_name,
            'first_name' => $contact->first_name,
            'last_name' => $contact->last_name,
            'email' => $contact->email,
            'phone' => $contact->phone,
            '2627039f0b2dd4f79a416f56ad5601456d3fb4a1' => $contact->id_no,
            'b2726d6fd800f6488aaec764df226f2a597b9c31' => $contact->client_type,
            '17a2cdcfe7ec4cefea178eb67d95019188c5705b' => $contact->buisness_position,
            '504b18f2758286267160ca704b284716802aa379' => $contact->budget,
            'f5503a6a029085bbbd6c2b314758bc9de2ef8691' => $contact->location,
            '79f4743dfada10605a8942a0d696bea6ae763b73' => $contact->added_date,
            'f53729c20a6f960fba7df828364bfc1c535c1273' => $contact->reffered_by,
            'notes' => $contact->note,
            'birthday' => $contact->date_of_birth,
            '27d45c50f5dc8ac5614b632ddecdd2a2bad74828' => $contact->team_member,
            '2a0db08a760d1c96b9791177793088f6de56922d' => $contact->project_or_investment,
            'd8b4589dab295f3c1d1bbbf94b9c1a2210552962' => $contact->citizenship,
            '7703ed23a461aa347fc7bbb6090d3ded00ea92a1' => $contact->passport_number,
            '8ac05295fdf751d9fe82fc4b32a7779b00b7f16f' => $contact->photo_of_passport_url,
            'c001ad4206c6bbaaa7481704d65bfe8ee939748a' => $contact->passport_expiry_date,
            'b03a92b5703c0c889ef05d4700dfa02a5ce8128f' => $contact->id_card_text,
            '81869845731965a8f0950a0868f355f84672083e' => $contact->photo_of_id_card_url,
            '6fa6fb61550c43146023df967da620a358f9d8da' => $contact->exact_address,
            'bf5224a1b4b95833bbe293b01760998255dd9937' => $contact->PO_box,
            'bb081d9a6fb3f027bd23196db7c19b9001f5a605' => $contact->name_of_the_bank_you_work_with,
            'ee7a6f4fc93727206991036c9cacd3dc25a1b4b8' => $contact->card_details_for_downpayment,
            '3ebc8831a7f564f3f40a8737ef172c254aeced71' => $contact->bank_acc_with_6_month_history,
            '3001779f2ee6021f70bca1b10d39d59b624090b1' => $contact->crypto_wallet,
            'contactPicture' => $contact->photo_of_passport_url,
        ]);
        $person= $person->getContent();

         // add lead
         $user= $pipedrive->leads()->add([
            'title' => $person->data->name,
            'person_id' => $person->data->id
        ]);

        // add files
        if ($contact->photo_of_passport) {
            $photo_of_passport = str_replace("\\", '/', $contact->photo_of_passport);
            $file = new \SplFileInfo($photo_of_passport);
            $pipedrive->files->add([
                'file'   => $file,
                'person_id' =>  $person->data->id
            ]);
        }
        if ($contact->photo_of_id_card) {
            $photo_of_id_card = str_replace("\\", '/', $contact->photo_of_id_card);
            $file = new \SplFileInfo($photo_of_id_card);
            $pipedrive->files->add([
                'file'   => $file,
                'person_id' =>  $person->data->id
            ]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('view_contacts');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $contact = Contact::find($id);

        return view('backend.contacts.show', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(request $request, string $id)
    {
        $this->authorize('edit_contacts');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_path = 'backend';
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $contact = contact::find($id);

        return view('backend.contacts.edit', compact('module_title', 'module_name', 'module_icon', 'module_path', 'module_name_singular', 'module_action', 'contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';


        $request->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable:',
            'email' => 'required|unique:'.$module_model.',email',
            'phone' => 'required|unique:'.$module_model.',phone',
            'id_no' => 'required|unique:'.$module_model.',id_no',
            'client_type' => 'nullable',
            'buisness_position' => 'nullable',
            'budget' => 'nullable',
            'location' => 'nullable',
            'added_date' => 'nullable|date',
            'reffered_by' => 'nullable',
            'note' => 'nullable',
            'date_of_birth' => 'nullable|date',
            'team_member' => 'nullable',
            'project_or_investment' => 'nullable',
            'citizenship' => 'nullable',
            'passport_number' => 'nullable',
            'passport_expiry_date' => 'nullable|date',
            'photo_of_passport' => 'nullable',
            'id_card_text' => 'nullable',
            'photo_of_id_card' => 'nullable',
            'exact_address' => 'nullable',
            'PO_box' => 'nullable',
            'name_of_the_bank_you_work_with' => 'nullable',
            'card_details_for_downpayment' => 'nullable',
            'bank_acc_with_6_month_history' => 'nullable',
            'crypto_wallet' => 'nullable',

        ]);

        $contact = Contact::find($id);

        $photo_of_passport_url = $contact->photo_of_passport;

        if ($request->hasFile('photo_of_passport')) {
            $photo_of_passport_url = uploadFileToPublic($request->file('photo_of_passport'), 'contact/photo_of_passport');
            $contact->photo_of_passport = $photo_of_passport_url;
        }

        $photo_of_id_card_url = $contact->photo_of_id_card;

        if ($request->hasFile('photo_of_id_card')) {
            $photo_of_id_card_url = uploadFileToPublic($request->file('photo_of_id_card'), 'contact/photo_of_id_card');
            $contact->photo_of_id_card = $photo_of_id_card_url;

        }

        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->id_no = $request->id_no;
        $contact->client_type = $request->client_type;
        $contact->buisness_position = $request->buisness_position;
        $contact->budget = $request->budget;
        $contact->location = $request->location;
        $contact->added_date = Carbon::parse($request->added_date)->format('Y-m-d');
        $contact->reffered_by = $request->reffered_by;
        $contact->note = $request->note;
        $contact->date_of_birth = Carbon::parse($request->added_date)->format('Y-m-d');
        $contact->team_member = $request->team_member;
        $contact->project_or_investment = $request->project_or_investment;
        $contact->citizenship = $request->citizenship;
        $contact->passport_number = $request->passport_number;
        $contact->photo_of_passport = $photo_of_passport_url;
        $contact->passport_expiry_date = Carbon::parse($request->added_date)->format('Y-m-d');
        $contact->photo_of_id_card = $photo_of_id_card_url;
        $contact->exact_address = $request->exact_address;
        $contact->PO_box = $request->PO_box;
        $contact->name_of_the_bank_you_work_with = $request->name_of_the_bank_you_work_with;
        $contact->card_details_for_downpayment = $request->card_details_for_downpayment;
        $contact->bank_acc_with_6_month_history = $request->bank_acc_with_6_month_history;
        $contact->crypto_wallet = $request->crypto_walle;

        $contact->save();

        flash(icon().' '.Str::singular($module_title)."' Updated Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete_contacts');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);


        $$module_name_singular->delete();

        flash(icon().' '.Str::singular($module_title)." Deleted Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }
}
