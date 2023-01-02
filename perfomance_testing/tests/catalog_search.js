import { group, check } from "k6";
import { SharedArray } from 'k6/data';
import { logError } from "../lib/utils.js";
import { sendGetRequestWithHttpAuth } from "../lib/http.js";
import papaparse from 'https://jslib.k6.io/papaparse/5.1.1/index.js';

const feedData = new SharedArray('feed data', function () {
  return papaparse.parse(open('../data/feed.csv'), { header: true }).data;
});



export default function (data) {

  group("Catalog search", function() {

    const feedDataItem = feedData[Math.floor(Math.random() * feedData.length)];

    let response = sendGetRequestWithHttpAuth(data.baseUrl + "/search?q=" + encodeURIComponent(feedDataItem.search_query))

    check(response, {
      'is status 200': (r) => r.status === 200
    }) || logError(response);
      
  });
};