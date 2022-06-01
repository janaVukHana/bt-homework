<?php


abstract class Contact {
    protected $phone;
    protected $email;

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

    // U klasi Contact dodati funkciju displayMe() koja ispisuje vrednosti atributa. 
    /**
     * This function echo attributes values
     * @return void
     */
    public function displayMe() {
        echo "Phone: $this->phone. Email: $this->email.";
    }
 }

// $contact1 = new Contact('062123456', 'test@test.com');
// $contact1->setPhone('062421903');
// $contact1->setEmail('ilija009@gmail.com');

// $contact2 = new Contact('062123457', 'test2@test.com');
// $contact2->setPhone('0642255544');
// $contact2->setEmail('johndoe@gmail.com');

// $contact3 = new Contact('062123458', 'test3@test.com');
// $contact3->setPhone('060123123');
// $contact3->setEmail('steva@gmail.com');

// $contact1->displayMe();
// Kreirati Klasu CustomerContact koja ima sve kao i klasa Contact 
// kao i protected $firstName; protected $lastName; 
// kao i metodu displayMe() (override) koja ispisuje sve atribute CustomerContact klase. 
class CustomerContact extends Contact {
    protected $firstName;
    protected $lastName;

    /**
     * This function create new object instance
     */
    public function __construct($firstName, $lastName, $phone, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->email = $email;
        // parent::__construct($phone, $email);
    }

    /**
     * This function echo attributes values
     * @return void
     */
    public function displayMe() {
        echo "$this->firstName $this->lastName $this->phone $this->email.<br>";
    }
}

// Kreirati Klasu BusinessContact koja ima sve kao i klasa Contact 
// kao i protected $address; protected $companyName; 
// kao i metodu displayMe() (override) koja ispisuje sve atribute BusinessContact klase. 
class BusinessContact extends Contact {
    protected $address;
    protected $companyName;

    public function __construct($address, $companyName, $phone, $email) {
        $this->address = $address;
        $this->companyName = $companyName;
        $this->phone = $phone;
        $this->email = $email;
        // parent::__construct($phone, $email);
    }

    /**
     * This function echo attributes values
     * @return void
     */
    public function displayMe() {
        echo "$this->address $this->companyName $this->phone $this->email.<br>";
    }
}
// Postaviti da ne moze da se kreira objekat klase Contact, vec samo klase CustomerContact i BusinessContact.

// Na kraju kreirati po 2 objekta CustomerContact i BusinessContact klasa. 
$customer_contact_1 = new CustomerContact('Ilija', 'Radovanovic', '123456789', 'mail@gmail.com');
$customer_contact_2 = new CustomerContact('Mornar', 'Popaj', '111333444', 'popaj@gmail.com');

$business_contact_1 = new BusinessContact('Novi Sad', 'Nestle', '999888777', 'nestle@gmal.com');
$business_contact_2 = new BusinessContact('Beograd', 'Snickers', '555555555', 'snicker@gmal.com');

// Dodati ih u objekat ContactList i ispisati sve kontakte.
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
            // echo $contact->getPhone() . ' ' . $contact->getEmail() . '<br>';
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


// foreach($this->contacts as $contact) {
// 	echo $contact->displayMe();
// }
