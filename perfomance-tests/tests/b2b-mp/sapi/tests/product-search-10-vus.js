import { ProductSearchScenario } from "../scenarios/product-search-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    CmsPage10Vus: {
        exec: 'executeProductSearchScenario',
        executor: 'shared-iterations',
        vus: 10,
        iterations: 10,
    },
};

const productSearchScenario = new ProductSearchScenario();

export function executeProductSearchScenario() {
    productSearchScenario.execute();
}
