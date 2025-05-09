<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecurityController extends AbstractController
{
    public function __construct(
        private readonly ClientRegistry $clientRegistry,
    )
    {
    }

    #[Route('/connect/keycloak', name: 'connect_keycloak_start')]
    public function login(): Response
    {
        $client = $this->clientRegistry->getClient('keycloak');

        return $client->redirect(['openid']); // Request the scopes
    }

    #[Route('/connect/keycloak/check', name: 'connect_keycloak_check')]
    public function loginCheck(): Response
    {
        // Nothing to do here because this route is never called
        // -> It is intercepted by KeycloakAuthenticator
    }

    /**
     * @throws \Exception
     */
    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logoutKeycloak(): never
    {
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}