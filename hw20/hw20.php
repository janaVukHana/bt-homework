<?php

// CONTACT CLASS //////////////////////////////////////////////////////////////////////////////
abstract class Contact {
    protected $phone;
    protected $email;

    public function __construct($phone, $email) {
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * This function set phone number
     * @param string $phone
     * @return void
     */
    public function setPhone(string $phone):void {
        $this->phone = $phone;
    }

     /**
     * This function set email
     * @param string $email
     * @return void
     */
    public function setEmail(string $email):void {
        $this->email = $email;
    }

     /**
     * This function return phone number
     * 
     * @return string
     */
    public function getPhone():string {
        return $this->phone;
    }

     /**
     * This function return email
     * 
     * @return string
     */
    public function getEmail():string {
        return $this->email;
    }

    /**
     * This function check if phone or string contais search 
     * @param string $text 
     * @return bool
     */
    public function contains(string $text = ''):bool {
        if(str_contains($this->phone, $text) || str_contains($this->email, $text)) {
            return true;
        }
        return false;
    }

    /**
     * This function echo attributes values
     * @return void
     */
    // public function displayMe() {
    //     echo "Phone: $this->phone. Email: $this->email.";
    // }
    abstract public function displayMe();
 }

// CUSTOMER CONTACT CLASS ////////////////////////////////////////////////////////////////////////
class CustomerContact extends Contact {
    protected $firstName;
    protected $lastName;

    /**
     * This function create new object instance
     */
    public function __construct($firstName, $lastName, $phone, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        parent::__construct($email, $phone);
    }

    /**
     * This function echo attributes values
     * @return void
     */
    public function displayMe() {
        echo "$this->firstName $this->lastName $this->phone $this->email.<br>";
    }
}

 
// BUSINESS CONTACT CLASS /////////////////////////////////////////////////////////////////////////////////////
class BusinessContact extends Contact {
    protected $address;
    protected $companyName;

    public function __construct($address, $companyName, $phone, $email) {
        $this->address = $address;
        $this->companyName = $companyName;
        parent::__construct($email, $phone);
    }

    /**
     * This function echo attributes values
     * @return void
     */
    public function displayMe() {
        echo "$this->address $this->companyName $this->phone $this->email.<br>";
    }
}

$customer_contact_1 = new CustomerContact('Ilija', 'Radovanovic', '123456789', 'mail@gmail.com');
$customer_contact_2 = new CustomerContact('Mornar', 'Popaj', '111333444', 'popaj@gmail.com');

$business_contact_1 = new BusinessContact('Novi Sad', 'Nestle', '999888777', 'nestle@gmal.com');
$business_contact_2 = new BusinessContact('Beograd', 'Snickers', '955555555', 'snicker@gmal.com');

// CONTACT LIST CLASS /////////////////////////////////////////////////////////////////////////////////////////////
class ContactList {
    protected $contacts = [];

    /**
     * This function add contact in contacts array
     * @param array $contact
     * @return void
     */
    public function addContact($contact){
        if($contact instanceof Contact) {
            $this->contacts[] = $contact;
        }
    }

    /**
     * This function echo all contacts
     * @return void
     */
    public function listAllContacts() {
        $all_contacts = $this->contacts;

        foreach($all_contacts as $contact) {
            $contact->displayMe();
        }
       
    }
}

$contact_list = new ContactList();
$contact_list->addContact($customer_contact_1);
$contact_list->addContact($customer_contact_2);
$contact_list->addContact($business_contact_1);
$contact_list->addContact($business_contact_2);
$contact_list->listAllContacts();
