<?php
/**
 * Created by IntelliJ IDEA.
 * User: tristanl
 * Date: 9/6/15
 * Time: 7:27 AM
 */

namespace Tristan\Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;

/** @Entity */
class Movie
{
    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;

    /** @Column(type="string", length=100) */
    public $title;

    /** @Column(type="integer") */
    public $year;

    /** @Column(type="float") */
    public $stars;
}