import { HomepageToAddToCartScenario } from "../scenarios/HomepageToAddToCartScenario.js";
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

