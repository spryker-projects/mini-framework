import { CheckoutScenario } from "../scenarios/checkout-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    S3_Checkout_70_items: {
        exec: 'executeCheckoutScenario',
        executor: 'shared-iterations',
        env: {
            numberOfItems: __ENV.numberOfItems || '70'
        }
    },
    S3_Checkout_700_items: {
        exec: 'executeCheckoutScenario',
        executor: 'shared-iterations',
        env: {
            numberOfItems: '700'
        }
    },
};

const checkoutScenario = new CheckoutScenario();

export function executeCheckoutScenario() {
    checkoutScenario.execute();
}

