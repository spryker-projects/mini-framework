[![codecov](https://codecov.io/gh/spryker-projects/mini-api-framework/branch/master/graph/badge.svg?token=AIC5DCCH5P)](https://codecov.io/gh/spryker-projects/mini-api-framework)

# Spryker Mini Framework


- Shared tests/scenarios
- Scenarios adjusted, some of existing ones removed (scope of refinement epic)
- sendGetRequestWithHttpAuth() instead of using this method. The HTTP auth must be transparently injected if the configured environment uses HTTP auth.
- Add a getBaseUrl() - why app must defined? Will require extra code in constructors OR passing from console 
    + what to do with preparation step when a scenario is storefront related but some sapi actions are required?
    Having separate methods as getStorefrontBaseUrl, getSapiBaseUrl, etc will be much more flexible 
- Comments in doc
