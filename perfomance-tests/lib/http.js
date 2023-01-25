import http from 'k6/http';
import encoding from 'k6/encoding';

export function sendGetRequestWithHttpAuth(url, authenticationOptions) {
    if (!authenticationOptions.username || !authenticationOptions.password) {
        fail('TEST_MACHINE_HTTPAUTH_USERNAME and TEST_MACHINE_HTTPAUTH_PASSWORD must to be specified to send GET requests with HTTP authentication');
    }

    return http.get(url, {
        headers: {
          'Authorization': `Basic ${encoding.b64encode(`${authenticationOptions.username}:${authenticationOptions.password}`)}`,
        }
    });
}