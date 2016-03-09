<?php

namespace Admin\Bundle\Authentication;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;


class SuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected $router;
    protected $security;
    public function __construct(Router $router , SecurityContext $security)
    {
        $this->router   = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
         if ($this->security->isGranted('ROLE_SUPER_ADMIN'))
        return new RedirectResponse($this->router->generate('admin'));
         
        
     
       
        elseif ($this->security->isGranted('ROLE_USER'))
            
       return new RedirectResponse($this->router->generate('welcome'));
        
    }
    }
