<?php

namespace App\CalculatorBundle\Controller;

use App\CalculatorBundle\Form\Type\CalculatorFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use App\CalculatorBundle\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array(
            'form' => $this->createForm(new CalculatorFormType())->createView()
        );
    }

    /**
     * @Route("/calculate", name="app_calculator_calculate")
     * @Method("POST")
     * @Template()
     */
    public function calculateAction(Request $request)
    {
        $form = $this->createForm(new CalculatorFormType());

        $form->handleRequest($request);
        $data = $form->getData();

        return array(
            'answer' => Calculator::create()->add($data['number_1'], $data['number_2'])
        );
    }
}
