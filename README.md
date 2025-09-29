# teste-qodo.com.br

**Product Owner:** {product_owner}

**Dados de Acesso:** Contidos no 1P.

**Plano:** {plan}

----
| Status | Ambiente | Branch | URL |
|-|-|-|-|
| ![ Wordpress CI/CD ](https://github.com/chrisplusr/teste-qodo.com.br/actions/workflows/ci-cd-wordpress.yml/badge.svg?branch=dev) ![ Theme CI/CD ](https://github.com/chrisplusr/teste-qodo.com.br/actions/workflows/ci-cd-theme.yml/badge.svg?branch=dev) | Dev | dev | <https://teste-qodo.dev.com> |
| ![ Wordpress CI/CD ](https://github.com/chrisplusr/teste-qodo.com.br/actions/workflows/ci-cd-wordpress.yml/badge.svg?branch=stage) ![ Theme CI/CD ](https://github.com/chrisplusr/teste-qodo.com.br/actions/workflows/ci-cd-theme.yml/badge.svg?branch=stage) | Stage | stage | <https://teste-qodo.stage.com> |
| ![ Wordpress CI/CD ](https://github.com/chrisplusr/teste-qodo.com.br/actions/workflows/ci-cd-wordpress.yml/badge.svg?branch=master) ![ Theme CI/CD ](https://github.com/chrisplusr/teste-qodo.com.br/actions/workflows/ci-cd-theme.yml/badge.svg?branch=master) | Produção | master | <https://teste-qodo.com.br> |


## WordPress com composer

## Resumo

- Todos os arquivos do WordPress ficaram ignorados
- Plugins e Temas públicos ficaram ignorados
- Todos os arquivos da pasta wp-content ficaram ignorados, a menos que sejam adicionados no .gitignore para que não sejam ignorados
- Plugins e Temas pagos por enquanto ficaram dentro do git
- O tema e os plugins onde o time trabalha ficara dentro do git

## Utilizando o composer para adicionar novos plugins, tema ou atualizar o wordpress

1. Adicionar o WordPress, plugins e temas no composer, para isso use o [wpackagist](https://wpackagist.org/).

    ```json
    {
      "require": {
        "roots/wordpress": "*",
        "wpackagist-plugin/wordpress-seo": "12.9.1"
      },
      "repositories": [
        {
          "type": "composer",
          "url": "https://wpackagist.org"
        }
      ]
    }
    ```

2. Adicionar no .gitignore o tema usado pelo o time.

    ```ini
    # npm e composer
    wp-content/themes/twentytwentyfive/vendor/ # <-  para ingorar a vendor do tema
    wp-content/themes/twentytwentyfive/dist/ # <- para ignorar a dist do tema
    
    # files to keep
    !.gitignore
    !.gitlab-ci.yml
    !README.md
    !composer.json
    !composer.lock
    !wp-content/themes/twentytwentyfive # <- para não ignorar o tema
    ```

## Instale o Wordpress e plugins com o composer

```bash
 composer install
```

----

## Documentação, guias e padrões

Use o [Guidelines](docs/guidelines.md) para ter uma visão completa do projeto, verifique se existe outras documentações
na pasta [Doc](docs/).

Crie documentação sempre quando necessário, usando o padrão da Apiki.
[Guia de Documentação](https://app.clickup.com/3015612/v/dc/2w0xw-38671/2w0xw-23731)

## Para utilizar o Repositório

Você pode contribuir

1. Clone o repositório!
2. Criar sua branch usando o master como base: git checkout -b care_novo_recurso
3. Commit suas alterações: git commit -m 'feat: Add some feature'
4. Faça o push da branch branch: git push origin care_novo_recurso
5. Crie o pull request para ser mesclado com o ambiente

Mais informações sobre [Versionamento](https://app.clickup.com/3015612/v/dc/2w0xw-38671/2w0xw-22411)

