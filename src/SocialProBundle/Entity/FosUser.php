<?php
/**
 * Created by PhpStorm.
 * User: salah
 * Date: 3/11/2017
 * Time: 3:05 PM
 */

namespace SocialProBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="SocialProBundle\Repository\TeamsRepository")
 * @ORM\Table(name="fos_user")
 */
class FosUser extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(name="first_name", type="string", length=30)
     */
    protected $firstName;
    /**
     * @ORM\Column(name="last_name", type="string", length=30)
     */
    protected $lastName;
    /**
     * @ORM\Column(name="gender", type="string", length=30)
     */
    protected $gender;
    /**
     * @ORM\Column(name="birthday", type="date")
     */
    protected $birthday;
    /**
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $manager;
    /**
     * @ORM\Column(name="profile_picture", type="string", length=255 )
     */
    protected $profilePicture = 'https://dummyimage.com/300.png/09f/fff';
/** @ORM\ManyToOne(targetEntity="Jobs")
 * @ORM\JoinColumns({
 *   @ORM\JoinColumn(name="Job_id", referencedColumnName="job_id")
 * })
 */

    protected $Job;

    /** @ORM\ManyToOne(targetEntity="Teams")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Team_id", referencedColumnName="team_id")
     * })
     */

    protected $team;

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }
    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->Job;
    }

    /**
     * @param mixed $Job
     */
    public function setJob($Job)
    {
        $this->Job = $Job;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param mixed $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}