<?php

// PITANJA ZA DANILA:
//1. KAKO DOKUMENTUJEMO FUNCIJU KADA IMAMO OPCIONI PARAMETAR? func je na liniji 55
 
// Kreirati klasu Contact:  protected $phone; protected $email; 
// Potrebno je da ima funkcije za setovanje i dohvatanje atributa, 
// kao i funciju contains($text = “”) koja proverava da li se sadrzi unutar nekog od parametra. 
class Contact {
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
}

$contact1 = new Contact();
$contact1->setPhone('062421903');
$contact1->setEmail('ilija009@gmail.com');

$contact2 = new Contact();
$contact2->setPhone('0642255544');
$contact2->setEmail('johndoe@gmail.com');

$contact3 = new Contact();
$contact3->setPhone('060123123');
$contact3->setEmail('steva@gmail.com');


// Kreirati  klasu ContactList protected $contacts = []; 
// Kreirati funckije addContact(Contact $contact) (instanceof) koja dodaje objekat klase kontakt u
//  $contacts. 
// listAllContacts() (echo) koja ispisuje sve kontakte koji su upisani u objektu.

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
            echo $contact->getPhone() . ' ' . $contact->getEmail() . '<br>';
        }
       
    }
}

$contact_list = new ContactList();
$contact_list->addContact($contact1);
$contact_list->addContact($contact2);
$contact_list->addContact($contact3);

$contact_list->listAllContacts();



// $contact1 = new Contact();
// $contact2 = new Contact();
// $contact3 = new Contact();
// $kontaktLista = new ContactList();

// echo $contact1->contains(‘danilo.strahinovic’);

// $kontaktLista->addContact($contact1);
// $kontaktLista->addContact($contact2);
// $kontaktLista->addContact($contact3);

// $kontakLista->listAllContacts();
