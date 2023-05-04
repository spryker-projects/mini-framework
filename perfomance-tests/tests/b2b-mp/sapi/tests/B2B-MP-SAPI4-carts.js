import { SharedCartsScenario } from "../../../cross-product/storefront/scenarios/shared-carts-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();

options.scenarios = {
    SAPI4_Carts: {
        exec: 'executeCartsScenario',
        executor: 'shared-iterations',
        tags: {
            testId: 'SAPI4'
        },
        iterations: 10
    },
};

const sharedCartsScenario = new SharedCartsScenario('B2B_MP');
export function executeCartsScenario() {
    sharedCartsScenario.execute();
}
