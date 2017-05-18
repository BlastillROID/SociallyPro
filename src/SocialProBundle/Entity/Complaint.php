<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29-Mar-17
 * Time: 2:12 PM
 */

namespace SocialProBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Complaint
 *
 * @ORM\Table(name="complaint", indexes={@ORM\Index(name="employee_complaint_fk", columns={"employee_id"})})
 * @ORM\Entity
 */
class Complaint
{
    /**
     * @var integer
     *
     * @ORM\Column(name="complaint_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $complaintId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=20, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_complaint", type="datetime", nullable=false)
     */
    private $dateComplaint = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status = 'en attente';

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=300, nullable=true)
     */
    private $answer = 'pas de reponse';

    /**
     * @var string
     *
     * @ORM\Column(name="seen", type="string", length=20, nullable=true)
     */
    private $seen = 'NULL';

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     * })
     */
    private $employee;

}