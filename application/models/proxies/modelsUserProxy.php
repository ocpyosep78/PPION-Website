<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class modelsUserProxy extends \models\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->_load();
        return parent::setId($id);
    }

    public function setEmail($email)
    {
        $this->_load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->_load();
        return parent::getEmail();
    }

    public function setPassword($password)
    {
        $this->_load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->_load();
        return parent::getPassword();
    }

    public function setName($name)
    {
        $this->_load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->_load();
        return parent::getName();
    }

    public function setHometown($hometown)
    {
        $this->_load();
        return parent::setHometown($hometown);
    }

    public function getHometown()
    {
        $this->_load();
        return parent::getHometown();
    }

    public function setAffiliation($affiliation)
    {
        $this->_load();
        return parent::setAffiliation($affiliation);
    }

    public function getAffiliation()
    {
        $this->_load();
        return parent::getAffiliation();
    }

    public function setArrivalDate($arrival_date)
    {
        $this->_load();
        return parent::setArrivalDate($arrival_date);
    }

    public function getArrivalDate()
    {
        $this->_load();
        return parent::getArrivalDate();
    }

    public function setBirthday($birthday)
    {
        $this->_load();
        return parent::setBirthday($birthday);
    }

    public function getBirthday()
    {
        $this->_load();
        return parent::getBirthday();
    }

    public function setMarriageStatus($marriage_status)
    {
        $this->_load();
        return parent::setMarriageStatus($marriage_status);
    }

    public function getMarriageStatus()
    {
        $this->_load();
        return parent::getMarriageStatus();
    }

    public function setGender($gender)
    {
        $this->_load();
        return parent::setGender($gender);
    }

    public function getGender()
    {
        $this->_load();
        return parent::getGender();
    }

    public function setReligion($religion)
    {
        $this->_load();
        return parent::setReligion($religion);
    }

    public function getReligion()
    {
        $this->_load();
        return parent::getReligion();
    }

    public function setIntroduction($introduction)
    {
        $this->_load();
        return parent::setIntroduction($introduction);
    }

    public function getIntroduction()
    {
        $this->_load();
        return parent::getIntroduction();
    }

    public function setUndergradUniversity($undergrad_university)
    {
        $this->_load();
        return parent::setUndergradUniversity($undergrad_university);
    }

    public function getUndergradUniversity()
    {
        $this->_load();
        return parent::getUndergradUniversity();
    }

    public function setUndergradDepartment($undergrad_department)
    {
        $this->_load();
        return parent::setUndergradDepartment($undergrad_department);
    }

    public function getUndergradDepartment()
    {
        $this->_load();
        return parent::getUndergradDepartment();
    }

    public function setUndergradGraduationYear($undergrad_graduation_year)
    {
        $this->_load();
        return parent::setUndergradGraduationYear($undergrad_graduation_year);
    }

    public function getUndergradGraduationYear()
    {
        $this->_load();
        return parent::getUndergradGraduationYear();
    }

    public function setMasterUniversity($master_university)
    {
        $this->_load();
        return parent::setMasterUniversity($master_university);
    }

    public function getMasterUniversity()
    {
        $this->_load();
        return parent::getMasterUniversity();
    }

    public function setMasterDepartment($master_department)
    {
        $this->_load();
        return parent::setMasterDepartment($master_department);
    }

    public function getMasterDepartment()
    {
        $this->_load();
        return parent::getMasterDepartment();
    }

    public function setMasterGraduationYear($master_graduation_year)
    {
        $this->_load();
        return parent::setMasterGraduationYear($master_graduation_year);
    }

    public function getMasterGraduationYear()
    {
        $this->_load();
        return parent::getMasterGraduationYear();
    }

    public function setPhdUniversity($phd_university)
    {
        $this->_load();
        return parent::setPhdUniversity($phd_university);
    }

    public function getPhdUniversity()
    {
        $this->_load();
        return parent::getPhdUniversity();
    }

    public function setPhdDepartment($phd_department)
    {
        $this->_load();
        return parent::setPhdDepartment($phd_department);
    }

    public function getPhdDepartment()
    {
        $this->_load();
        return parent::getPhdDepartment();
    }

    public function setPhdGraduationYear($phd_graduation_year)
    {
        $this->_load();
        return parent::setPhdGraduationYear($phd_graduation_year);
    }

    public function getPhdGraduationYear()
    {
        $this->_load();
        return parent::getPhdGraduationYear();
    }

    public function setInformalSkill($informal_skill)
    {
        $this->_load();
        return parent::setInformalSkill($informal_skill);
    }

    public function getInformalSkill()
    {
        $this->_load();
        return parent::getInformalSkill();
    }

    public function setLeftTheCountry($left_the_country)
    {
        $this->_load();
        return parent::setLeftTheCountry($left_the_country);
    }

    public function getLeftTheCountry()
    {
        $this->_load();
        return parent::getLeftTheCountry();
    }

    public function setPosition($position)
    {
        $this->_load();
        return parent::setPosition($position);
    }

    public function getPosition()
    {
        $this->_load();
        return parent::getPosition();
    }

    public function setFamilies($families)
    {
        $this->_load();
        return parent::setFamilies($families);
    }

    public function getFamilies()
    {
        $this->_load();
        return parent::getFamilies();
    }

    public function setContacts($contacts)
    {
        $this->_load();
        return parent::setContacts($contacts);
    }

    public function getContacts()
    {
        $this->_load();
        return parent::getContacts();
    }

    public function setExpertises($expertises)
    {
        $this->_load();
        return parent::setExpertises($expertises);
    }

    public function getExpertises()
    {
        $this->_load();
        return parent::getExpertises();
    }

    public function setPhotos($photos)
    {
        $this->_load();
        return parent::setPhotos($photos);
    }

    public function getPhotos()
    {
        $this->_load();
        return parent::getPhotos();
    }

    public function setPosts($posts)
    {
        $this->_load();
        return parent::setPosts($posts);
    }

    public function getPosts()
    {
        $this->_load();
        return parent::getPosts();
    }

    public function setEvents($events)
    {
        $this->_load();
        return parent::setEvents($events);
    }

    public function getEvents()
    {
        $this->_load();
        return parent::getEvents();
    }

    public function setFavorites($favorites)
    {
        $this->_load();
        return parent::setFavorites($favorites);
    }

    public function getFavorites()
    {
        $this->_load();
        return parent::getFavorites();
    }

    public function setCreatedAt($created_at)
    {
        $this->_load();
        return parent::setCreatedAt($created_at);
    }

    public function getCreatedAt()
    {
        $this->_load();
        return parent::getCreatedAt();
    }

    public function setUpdatedAt($updated_at)
    {
        $this->_load();
        return parent::setUpdatedAt($updated_at);
    }

    public function getUpdatedAt()
    {
        $this->_load();
        return parent::getUpdatedAt();
    }

    public function toArray()
    {
        $this->_load();
        return parent::toArray();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'email', 'password', 'name', 'hometown', 'affiliation', 'arrival_date', 'birthday', 'marriage_status', 'gender', 'religion', 'introduction', 'undergrad_university', 'undergrad_department', 'undergrad_graduation_year', 'master_university', 'master_department', 'master_graduation_year', 'phd_university', 'phd_department', 'phd_graduation_year', 'informal_skill', 'left_the_country', 'position', 'families', 'contacts', 'expertises', 'photos', 'events', 'posts', 'favorites', 'created_at', 'updated_at');
    }
}