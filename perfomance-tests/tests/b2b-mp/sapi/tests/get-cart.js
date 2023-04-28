import { GetCartScenario } from "../../../shared/scenarios/storefront/get-cart-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    GetCart: {
        exec: 'executeGetCartScenario',
        executor: 'shared-iterations',
        env: {
            numberOfItems: __ENV.numberOfItems || '1'
        },
        vus: 1,
        iterations: 10
    },
};

const getCartScenario = new GetCartScenario('B2B_MP');

export function executeGetCartScenario() {
    getCartScenario.execute();
}

