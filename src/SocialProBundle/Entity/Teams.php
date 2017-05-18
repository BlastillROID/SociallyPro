<?php

namespace SocialProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teams
 *
 * @ORM\Table(name="teams", indexes={@ORM\Index(name="leader_id", columns={"leader_id"}), @ORM\Index(name="leader_id_2", columns={"leader_id"}), @ORM\Index(name="timeline_id", columns={"timeline_id"})})
 * @ORM\Entity(repositoryClass="SocialProBundle\Repository\TeamsRepository")
 */
class Teams
{
    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamId;

    /**
     * @var string
     *
     * @ORM\Column(name="team_name", type="string", length=50, nullable=false)
     */
    private $teamName;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leader_id", referencedColumnName="id")
     * })
     */
    private $leader;

    /**
     * @var \Timeline
     *
     * @ORM\ManyToOne(targetEntity="Timeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="timeline_id", referencedColumnName="timeline_id")
     * })
     */
    private $timeline;

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    }

    /**
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param string $teamName
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }

    /**
     * @return \Employee
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * @param \Employee $leader
     */
    public function setLeader($leader)
    {
        $this->leader = $leader;
    }

    /**
     * @return \Timeline
     */
    public function getTimeline()
    {
        return $this->timeline;
    }

    /**
     * @param \Timeline $timeline
     */
    public function setTimeline($timeline)
    {
        $this->timeline = $timeline;
    }


}

