import http from 'k6/http';
import encoding from 'k6/encoding';
import { fail } from "k6";

export function sendGetRequestWithHttpAuth(url, httpCredentials) {

    if (!httpCredentials.username || !httpCredentials.password) {
        fail('Username and passowrd must to be specified to send GET requests with HTTP authentication');
    }

    return http.get(url, {
        headers: {
          'Authorization': `Basic ${encoding.b64encode(`${httpCredentials.username}:${httpCredentials.password}`)}`,
        }
    });
}