import { ProductPageScenario } from "../scenarios/product-page-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    HomepageToAddToCart: {
        exec: 'executeHomepageToAddToCartScenario',
        executor: 'shared-iterations',
        env: {
            numberOfItems: __ENV.numberOfItems || '1'
        },
        vus: 10,
        iterations: 100,
    }
};

const homepageToAddToCartScenario = new ProductPageScenario();

export function executeHomepageToAddToCartScenario() {
    homepageToAddToCartScenario.execute();
}

