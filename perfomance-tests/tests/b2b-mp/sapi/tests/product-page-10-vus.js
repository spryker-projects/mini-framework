import { ProductPageScenario } from "../scenarios/product-page-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    CmsPage10Vus: {
        exec: 'executeProductPageScenario',
        executor: 'shared-iterations',
        vus: 10,
        iterations: 10,
    },
};

const productPageScenario = new ProductPageScenario();

export function executeProductPageScenario() {
    productPageScenario.execute();
}
