<?php

namespace App\Http\Controllers\Backend\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Models\Contact;

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
        $contacts = DB::table('contacts')->select('*')->get();
        return view('backend.contacts.index', compact('contacts'));
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

        $validatedData = $request->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable:',
            'email' => 'required|unique:'.$module_model.',email',
            'phone' => 'required|unique:'.$module_model.',phone',
            'id_no' => 'required|unique:'.$module_model.',id_no',
            'client_type' => 'nullable:'.$module_model.',client_type',
            'buisness_position' => 'nullable:'.$module_model.',buisness_position',
            'budget' => 'nullable:'.$module_model.',budget',
            'location' => 'nullable:'.$module_model.',location',
            'added_date' => 'nullable:'.$module_model.',added_date',
            'reffered_by' => 'nullable:'.$module_model.',reffered_by',
            'note' => 'nullable:'.$module_model.',note',
            'date_of_birth' => 'nullable',
            'team_member' => 'nullable',
            'project_or_investment' => 'nullable:'.$module_model.',project_or_investment',
            'citizenship' => 'nullable:'.$module_model.',citizenship',
            'passport_number' => 'nullable',
            'passport_expiry_date' => 'nullable:'.$module_model.',passport_expiry_date',
            'photo_of_passport' => 'nullable:'.$module_model.',photo_of_passport',
            'id_card_text' => 'nullable:'.$module_model.',id_card_text',
            'photo_of_id_card' => 'nullable:'.$module_model.',photo_of_id_card',
            'exact_address' => 'nullable:'.$module_model.',exact_address',
            'PO_box' => 'nullable:'.$module_model.',PO_box',
            'name_of_the_bank_you_work_with' => 'nullable:'.$module_model.',name_of_the_bank_you_work_with',
            'card_details_for_downpayment' => 'nullable:'.$module_model.',card_details_for_downpayment',
            'bank_acc_with_6_month_history' => 'nullable:'.$module_model.',bank_acc_with_6_month_history',
            'crypto_wallet' => 'nullable:'.$module_model.',crypto_wallet',

        ]);

        $photo_of_passport_url = '';

        if ($request->hasFile('photo_of_passport')) {
            $photo_of_passport_url = uploadFileToPublic($request->file('photo_of_passport'), 'contact/photo_of_passport');
        }

        $photo_of_id_card_url = '';

        if ($request->hasFile('photo_of_id_card')) {
            $photo_of_id_card_url = uploadFileToPublic($request->file('photo_of_id_card'), 'contact/photo_of_id_card');
        }

        $contact = new Contact([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'id_no' => $validatedData['id_no'],
            'client_type' => $validatedData['client_type'],
            'buisness_position' => $validatedData['buisness_position'],
            'budget' => $validatedData['budget'],
            'location' => $validatedData['location'],
            'added_date' => $validatedData['added_date'],
            'reffered_by' => $validatedData['reffered_by'],
            'note' => $validatedData['note'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'team_member' => $validatedData['team_member'],
            'project_or_investment' => $validatedData['project_or_investment'],
            'citizenship' => $validatedData['citizenship'],
            'passport_number' => $validatedData['passport_number'],
            'photo_of_passport' => $photo_of_passport_url,
            'passport_expiry_date' => $validatedData['passport_expiry_date'],
            'id_card_text' => $validatedData['id_card_text'],
            'photo_of_id_card' => $photo_of_id_card_url,
            'exact_address' => $validatedData['exact_address'],
            'PO_box' => $validatedData['PO_box'],
            'name_of_the_bank_you_work_with' => $validatedData['name_of_the_bank_you_work_with'],
            'card_details_for_downpayment' => $validatedData['card_details_for_downpayment'],
            'bank_acc_with_6_month_history' => $validatedData['bank_acc_with_6_month_history'],
            'crypto_wallet' => $validatedData['crypto_wallet']
        ]);

        $contact->save();



        flash(icon().' '.Str::singular($module_title)."' Created.")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
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
    public function edit(request $request, string $id)
    {
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


        $validatedData = $request->validate([
            'first_name' => 'required:'.$module_model.',first_name',
            'last_name' => 'nullable:'.$module_model.',last_name',
            'email' => 'nullable:'.$module_model.',email',
            'id_no' => 'nullable:'.$module_model.',id_no',
            'phone' => 'required|unique:'.$module_model.',phone',
            'client_type' => 'nullable:'.$module_model.',client_type',
            'buisness_position' => 'nullable:'.$module_model.',buisness_position',
            'budget' => 'nullable:'.$module_model.',budget',
            'location' => 'nullable:'.$module_model.',location',
            'added_date' => 'nullable:'.$module_model.',added_date',
            'reffered_by' => 'nullable:'.$module_model.',reffered_by',
            'note' => 'nullable:'.$module_model.',note',
            'date_of_birth' => 'nullable',
            'team_member' => 'nullable',
            'project_or_investment' => 'nullable:'.$module_model.',project_or_investment',
            'citizenship' => 'nullable:'.$module_model.',citizenship',
            'passport_number' => 'nullable',
            'passport_expiry_date' => 'nullable:'.$module_model.',passport_expiry_date',
            'photo_of_passport' => 'nullable:'.$module_model.',photo_of_passport',
            'id_card_text' => 'nullable:'.$module_model.',id_card_text',
            'photo_of_id_card' => 'nullable:'.$module_model.',photo_of_id_card',
            'exact_address' => 'nullable:'.$module_model.',exact_address',
            'PO_box' => 'nullable:'.$module_model.',PO_box',
            'name_of_the_bank_you_work_with' => 'nullable:'.$module_model.',name_of_the_bank_you_work_with',
            'card_details_for_downpayment' => 'nullable:'.$module_model.',card_details_for_downpayment',
            'bank_acc_with_6_month_history' => 'nullable:'.$module_model.',bank_acc_with_6_month_history',
            'crypto_wallet' => 'nullable:'.$module_model.',crypto_wallet',
        ]);




        $contact = Contact::find($id);

        $photo_of_passport_url = $contact->photo_of_passport;

        if ($request->hasFile('photo_of_passport')) {
            $photo_of_passport_url = uploadFileToPublic($request->file('photo_of_passport'), 'contact/photo_of_passport');
        }

        $contact->photo_of_passport = $photo_of_passport_url;



        $photo_of_id_card_url = $contact->photo_of_id_card;

        if ($request->hasFile('photo_of_id_card')) {
            $photo_of_id_card_url = uploadFileToPublic($request->file('photo_of_id_card'), 'contact/photo_of_id_card');

        }

        $contact->photo_of_id_card = $photo_of_id_card_url;


        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->id_no = $request->id_no;
        $contact->client_type = $request->client_type;
        $contact->buisness_position = $request->buisness_position;
        $contact->budget = $request->budget;
        $contact->location = $request->location;
        $contact->added_date = $request->added_date;
        $contact->reffered_by = $request->reffered_by;
        $contact->note = $request->note;
        $contact->date_of_birth = $request->date_of_birth;
        $contact->team_member = $request->team_member;
        $contact->project_or_investment = $request->project_or_investment;
        $contact->citizenship = $request->citizenship;
        $contact->passport_number = $request->passport_number;
        $contact->passport_expiry_date = $request->passport_expiry_date;
        $contact->id_card_text = $request->id_card_text;
        $contact->exact_address = $request->exact_address;
        $contact->PO_box = $request->PO_box;
        $contact->name_of_the_bank_you_work_with = $request->name_of_the_bank_you_work_with;
        $contact->card_details_for_downpayment = $request->card_details_for_downpayment;
        $contact->bank_acc_with_6_month_history = $request->bank_acc_with_6_month_history;
        $contact->crypto_wallet = $request->crypto_wallet;

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
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);


        $$module_name_singular->delete();

        flash(icon().' '.Str::singular($module_title)."' Deleted Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }
}
