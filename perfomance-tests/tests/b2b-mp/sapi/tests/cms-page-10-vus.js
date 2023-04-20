import { CmsPageScenario } from "../scenarios/cms-page-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    CmsPage10Vus: {
        exec: 'executeCmsPageScenario',
        executor: 'shared-iterations',
        vus: 10,
        iterations: 10
    },
};

const cmsPageScenario = new CmsPageScenario();

export function executeCmsPageScenario() {
    cmsPageScenario.execute();
}
