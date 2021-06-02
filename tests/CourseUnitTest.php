<?php

namespace App\Tests;

use DateTime;
use App\Entity\Course;
use PHPUnit\Framework\TestCase;



class CourseUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $course = new Course();
        $datetime = new DateTime();
        $time = new DateTime();


        $course ->setDateCourse($datetime)
                ->setVilleDepart('ville départ')
                ->setHeureDepart($time)
                ->setVilleArrivee('ville arrivée')
                ->setHeureArrivee($time)
                ->setAllerRetour(true)
                ->setPrixCourse(1111.11);

                
        $this->assertTrue($course->getDateCourse() === $datetime);
        $this->assertTrue($course->getVilleDepart() === 'ville départ');
        $this->assertTrue($course->getHeureDepart() === $time);
        $this->assertTrue($course->getVilleArrivee() === 'ville arrivée');
        $this->assertTrue($course->getHeureArrivee() === $time);
        $this->assertTrue($course->getAllerRetour() === true);
        $this->assertTrue($course->getPrixCourse() == 1111.11);
        
    }

    public function testIsFalse()
    {
        $course = new Course();
        $datetime = new DateTime();
        $time = new DateTime();


        $course ->setDateCourse($datetime)
                ->setVilleDepart('ville départ')
                ->setHeureDepart($time)
                ->setVilleArrivee('ville arrivée')
                ->setHeureArrivee($time)
                ->setAllerRetour(true)
                ->setPrixCourse(1111.11);

                
        $this->assertFalse($course->getDateCourse() === new DateTime());
        $this->assertFalse($course->getVilleDepart() === 'false');
        $this->assertFalse($course->getHeureDepart() === new DateTime());
        $this->assertFalse($course->getVilleArrivee() === 'false');
        $this->assertFalse($course->getHeureArrivee() === new DateTime());
        $this->assertFalse($course->getAllerRetour() === false);
        $this->assertFalse($course->getPrixCourse() == 0000.00);
     
    }

    public function testIsEmpty()
    {
        $course = new Course();
        
        $this->assertEmpty($course->getDateCourse());
        $this->assertEmpty($course->getVilleDepart());
        $this->assertEmpty($course->getHeureDepart());
        $this->assertEmpty($course->getVilleArrivee());
        $this->assertEmpty($course->getHeureArrivee());
        $this->assertEmpty($course->getAllerRetour());
        $this->assertEmpty($course->getPrixCourse());
        
    }
}

