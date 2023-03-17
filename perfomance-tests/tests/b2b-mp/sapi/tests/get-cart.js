import { GetCartScenario } from "../scenarios/GetCartScenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
        GetCart: {
            exec: 'executeGetCartScenario',
            executor: 'shared-iterations',
            env: {
                numberOfItems: __ENV.numberOfItems || '1'
            }
        },
        GetCart_70_items: {
            exec: 'executeGetCartScenario',
            executor: 'shared-iterations',
            env: {
                numberOfItems: '70'
            }
        },
    };

const getCartScenario = new GetCartScenario();

export function executeGetCartScenario() {
    getCartScenario.execute();
}

