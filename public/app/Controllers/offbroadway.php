<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 10/11/15
 * Time: 12:07 PM
 */

namespace controllers;

use core\view;
use helpers\form;
use helpers\url;
use helpers\phpmailer\mail;

/**
 * Class offbroadway
 * @package controllers
 */
class offbroadway extends \core\controller {

    /**
     * @var \models\obct
     */
    private $_obct;

    /**
     *
     */
    public function __construct(){
            parent::__construct();

            $this->_obct = new \models\obct();

    }

    /**
     *
     */
    public function index()
    {
        $data['title'] = 'Home';

        $new = $this->_obct->getWhatsNew();
        $data['new'] = $new;

        $show = $this->_obct->getCurrentShow();
        $data['show'] = $show;

        view::rendertemplate('header', $data);
        view::rendertemplate('home', $data);
        view::rendertemplate('footer', $data);
    }

    /**
     *
     */
    public function aboutus()
    {
        $data['title'] = 'About OBCT';

        // Gets the 5 bullet points
        $about = $this->_obct->getAbout();
        $data['about'] = $about;

        View::rendertemplate('header', $data);
        View::rendertemplate('aboutus', $data);
        View::rendertemplate('footer');

    }

    public function teachers()
    {
        $data['title'] = 'Teachers';

        $show = $this->_obct->getCurrentShow();
        $data['show'] = $show;

        $teachers = $this->_obct->getTeachers();
        $data['teachers'] = $teachers;

        View::rendertemplate('header', $data);
        View::rendertemplate('teachers', $data);
        View::rendertemplate('footer');
    }

    /**
     *
     */
    public function auditions()
    {
        $data['title'] = 'Auditions';

        $auditions = $this->_obct->getAuditions();
        $data['auditions'] = $auditions;

        $faq = $this->_obct->getFaq();
        $data['faq'] = $faq;

        $tips = $this->_obct->getHints();
        $data['tips'] = $tips;

        $show = $this->_obct->getCurrentShow();
        $data['show'] = $show;


        View::rendertemplate('header', $data);
        View::rendertemplate('auditions', $data);
        View::rendertemplate('footer');
    }

    /**
     *
     */
    public function classes()
    {
        $data['title'] = 'Classes';

        $classes = $this->_obct->getClasses();

        $data['classes'] = $classes;

        View::rendertemplate('header', $data);
        View::rendertemplate('classes', $data);
        View::rendertemplate('footer');

    }

    /**
     *
     */
    public function troupe()
    {
        $data['title'] = 'OBCT Troupe';

        $troupeInfo = $this->_obct->getTroupeInfo();
        $troupeAddtInfo = $this->_obct->getTroupeAddtInfo();

        $data['troupeInfo'] = $troupeInfo;
        $data['troupeAddtInfo'] = $troupeAddtInfo;

        View::rendertemplate('header', $data);
        View::rendertemplate('troupe', $data);
        View::rendertemplate('footer');

    }

    /**
     *
     */
    public function juniorTroupe()
    {
        $data['title'] = 'Jr OBCT Troupe';

        $jrTroupe = $this->_obct->getJrTroupeInfo();
        $jrTroupeImg = $this->_obct->getJrTroupeImages();

        $data['jrTroupe'] = $jrTroupe;
        $data['jrTroupeImg'] = $jrTroupeImg;

        View::rendertemplate('header', $data);
        View::rendertemplate('jrtroupe', $data);
        View::rendertemplate('footer');
    }

    /**
     *
     */
    public function gallery()
    {
        $data['title'] = 'About OBCT';
    }

    /**
     *
     */
    public function currentProd()
    {
        $data['title'] = 'Current Show';

        $currentProd = $this->_obct->getCurrentShow();
        $data['currentShow'] = $currentProd;

        $upcomingShows = $this->_obct->getUpcomingShows();
        $data['upcomingShows'] = $upcomingShows;

        View::rendertemplate('header', $data);
        View::rendertemplate('currentprod', $data);
        View::rendertemplate('footer');
    }

    public function schools()
    {
      $data['title'] = 'Schools';

      $schoolPoints = $this->_obct->getSchoolPoints();
      $schools = $this->_obct->getSchools();

      $data['schoolPoints'] = $schoolPoints;
      $data['schools'] = $schools;

      View::rendertemplate('header', $data);
      View::rendertemplate('schools', $data);
      View::rendertemplate('footer');
    }

    /**
     *
     */
    public function questions()
    {
        $data['title'] = 'Questions';

        $faq = $this->_obct->getFaq();
        $data['faq'] = $faq;

        $tips = $this->_obct->getHints();
        $data['tips'] = $tips;

        $show = $this->_obct->getCurrentShow();
        $data['show'] = $show;


        View::rendertemplate('header', $data);
        View::rendertemplate('questions', $data);
        View::rendertemplate('footer');
    }

    /**
     *
     */
    public function summerSession()
    {
        $data['title'] = 'Summer Sessions';

        $summerSession = $this->_obct->getSummerSession();
        $data['summer'] = $summerSession;

        $summerInfo = $this->_obct->getSummerInfo();
        $data['info'] = $summerInfo;

        View::rendertemplate('header', $data);
        View::rendertemplate('summer', $data);
        View::rendertemplate('footer');
    }

    /**
     *
     */
    public function contact()
    {
        $data['title'] = 'Contact';


        view::rendertemplate('header', $data);
        view::rendertemplate('contact');
        view::rendertemplate('footer');
    }
}
