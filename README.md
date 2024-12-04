# Spryker ACP App
## Quickstart

### Clone the repo and boot
```
git clone --recurse-submodules git@github.com:spryker-project/app-stripe.git acp-app
cd acp-app
docker/sdk boot deploy.dev.yml
docker/sdk up
```

### Configuring PaymentProvider Keys

Copy the `config_local.dist.php` to `config_local.php` and add your PaymentProvider keys to `config_local.php`.

```
cp config/Shared/config_local.dist.php config/Shared/config_local.php
```

## App configuration form

The config form is described in `config/app/configuration.json`.

- [Widget types](https://github.com/spryker/spryker-docs/blob/master/_drafts/acp-apps-development/develop-an-app/app-configuration.md)
- [Default widgets](https://github.com/guillotinaweb/ngx-schema-form?tab=readme-ov-file#widgets)
- [Conditional fields](https://github.com/guillotinaweb/ngx-schema-form?tab=readme-ov-file#conditional-fields) (`visibleIf`)
- Complex expressions for `visibleIf` uses [Jexl](https://github.com/TomFrost/Jexl) (Javascript Expression Language)
