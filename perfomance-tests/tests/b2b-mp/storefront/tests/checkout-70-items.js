import { CheckoutScenario } from "../scenarios/CheckoutScenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
        Checkout_70_items: {
            exec: 'executeCheckoutScenario',
            executor: 'shared-iterations',
            env: {
                numberOfItems: '70'
            }
        },
    };

const checkoutScenario = new CheckoutScenario();

export function executeCheckoutScenario() {
    checkoutScenario.execute();
}

