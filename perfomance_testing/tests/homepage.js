import { group, check } from "k6";
import { logError } from "../lib/utils.js";
import { sendGetRequestWithHttpAuth } from "../lib/http.js";

export default function (data) {
    group("Homepage", function() {
        let response = sendGetRequestWithHttpAuth(data.baseUrl);
        check(response, { "is success status code": 200}) || logError(response);
    });

};