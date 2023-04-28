import { ProductSearchScenario } from "../scenarios/product-search-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    CmsPage1VUS: {
        exec: 'executeProductSearchScenario',
        executor: 'shared-iterations',
        vus: 1,
        iterations: 10,
    },
};

const productSearchScenario = new ProductSearchScenario();

export function executeProductSearchScenario() {
    productSearchScenario.execute();
}
