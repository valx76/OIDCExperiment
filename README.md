# Usage

- Start the docker containers: `docker compose up`
- Go to the Keycloak admin: http://localhost:8080
- Login with: admin / !ChangeMe!
- Create a new realm named "oidc_experiment"
- Go inside this realm
- Create a new client with the following information:
  - Client type: OpenID Connect
  - Client ID: oidc_experiment
  - Enable "Client Authentication"
  - Authentication flow: Standard flow
  - Root URL: https://localhost:8000/
  - Valid redirect URIs: *
- Save the client
- Go to this new client's config page and copy the client secret under the "Credentials" tab
- Paste this value to the `OIDC_CLIENT_SECRET` config entry, in the .env file
- In the Keycloak admin page, enable "User Registration" under Configure > Realm settings > Login
- Run the web server: `symfony server:start`
- Test the application: http://localhost:8000
