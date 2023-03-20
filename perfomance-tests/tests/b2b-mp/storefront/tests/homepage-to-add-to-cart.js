import { HomepageToAddToCartScenario } from "../scenarios/homepage-to-add-to-cart-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
        HomepageToAddToCart: {
            exec: 'executeHomepageToAddToCartScenario',
            executor: 'shared-iterations',
        },
    };

const homepageToAddToCartScenario = new HomepageToAddToCartScenario();

export function executeHomepageToAddToCartScenario() {
    homepageToAddToCartScenario.execute();
}

