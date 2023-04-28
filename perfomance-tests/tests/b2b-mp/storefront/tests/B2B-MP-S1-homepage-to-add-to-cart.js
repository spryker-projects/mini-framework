import { HomepageToAddToCartScenario } from "../scenarios/homepage-to-add-to-cart-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();

options.scenarios = {
        S1_HomepageToAddToCart: {
            exec: 'executeHomepageToAddToCartScenario',
            executor: 'shared-iterations',
            tags: {
                testCase: 'S1'
            },
        },
    };

const homepageToAddToCartScenario= new HomepageToAddToCartScenario();

export function executeHomepageToAddToCartScenario() {
    homepageToAddToCartScenario.execute();
}
