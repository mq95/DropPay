<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="account_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="sur_name", type="string", length=100, nullable=true)
     */
    private $surName;

    /**
     * @var string
     *
     * @ORM\Column(name="date_birth", type="string", length=255, nullable=true)
     */
    private $dateBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=100, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="partita_iva", type="string", length=100, nullable=true)
     */
    private $partitaIva;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria_merceologica", type="string", length=100, nullable=true)
     */
    private $categoriaMerceologica;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_ateco", type="string", length=100, nullable=true)
     */
    private $codiceAteco;

    /**
     *
     * @ORM\Column(name="id_document", type="string", nullable=true)
     * @Assert\NotBlank(message="Please, upload the identity document as a PDF file.")
     * @Assert\File
     */
    private $idDocument;
    
    /**
     *
     * @ORM\Column(name="selfie", type="string", nullable=true)
     * @Assert\Image
     */
    private $selfie;

    public function getSelfie(){
        return $this->selfie ;
    }

    public function setSelfie($value){
        $this->selfie = $value;
    }



/**
     *
     * @ORM\Column(name="firma", type="string", nullable=true)
     * @Assert\Image
     */
    private $firma;

    public function getFirma(){
        return $this->firma ;
    }

    public function setFirma($value){
        $this->firma = $value;
    }





    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="visura", type="string", length=100, nullable=true)
     * @Assert\NotBlank(message="Please, upload the identity document as a PDF file.")
     * @Assert\File
     */
    private $visura;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;


    /**
     * @var string
     *
     * @ORM\Column(name="progress", type="integer", nullable=true)
     */
    private $progress;

    public function getProgress(){
        return $this->progress ;
    }

    public function setProgress($value){
        $this->progress = $value;
    }


    /**
     *
     * @ORM\Column(name="progressBackOffice", type="array", nullable=true)
     */
    private $progressBackOffice;
    public function getProgressBackOffice(){
        return array($this->progressBackOffice) ;
    }

    public function setProgressBackOffice(array $value){
        $this->progressBackOffice = $value;
    }



    public function getId() {
        return $this->id;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getFirstname(){
        return $this->firstname ;
    }

    public function getSurname(){
        return $this->surName ;
    }

    public function getDateBirth(){
        return $this->dateBirth ;
    }

    public function getGender(){
        return $this->gender ;
    }

    public function getType(){
        return $this->type ;
    }

    public function getPartitaIva(){
        return $this->partitaIva ;
    }

    public function getCategoriaMerceologica(){
        return $this->categoriaMerceologica ;
    }

    public function getCodiceAteco(){
        return $this->codiceAteco ;
    }

    public function getIdDocument(){
        return $this->idDocument ;
    }

    



    public function getEmail(){
        return $this->email ;
    }

    public function getVisura(){
        return $this->visura ;
    }

    public function getStatus(){
        return $this->status ;
    }

    public function setUsername($value){
        $this->username = $value;
    }

    public function setFirstname($value){
        $this->firstname = $value;
    }

    public function setSurname($value){
        $this->surName = $value;
    }

    public function setDateBirth($value){
        $this->dateBirth = $value;
    }

    public function setGender($value){
        $this->gender = $value;
    }

    public function setType($value){
        $this->type = $value;
    }

    public function setPI($value){
        $this->partitaIva = $value;
    }

    public function setCM($value){
        $this->categoriaMerceologica = $value;
    }

    public function setAteco($value){
        $this->codiceAteco = $value;
    }

    public function setIdDocument($value){
        $this->idDocument = $value;
    }

    




    public function setEmail($value){
        $this->email = $value;
    }

    public function setVisura($value){
        $this->visura = $value;
    }

    public function setStatus($value){
        $this->status = $value;
    }
}

