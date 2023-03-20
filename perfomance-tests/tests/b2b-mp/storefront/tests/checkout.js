import { CheckoutScenario } from "../scenarios/checkout-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
        Checkout: {
            exec: 'executeCheckoutScenario',
            executor: 'shared-iterations',
            env: {
                numberOfItems: __ENV.numberOfItems || '1'
            }
        },
    };

//scenario objects must be created outside any function used in execute phase since some initialization actions are done on
//K6 "init" stage (in the current implementation such init action are done in class constructor).
const checkoutScenario = new CheckoutScenario();

//this function is needed to setup scenarios: "exec" property expected a string with a function name and it is not possible
//to use class methods.
export function executeCheckoutScenario() {
    checkoutScenario.execute();
}

