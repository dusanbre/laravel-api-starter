# Laravel starter API

## Development

**Requirements**

* working Docker environment
* IDE with EditorConfig and PHP CodeSniffer support
* For Windows specifically VSCode with the Remote WSL extensions is recommended

**Quickstart**

1. Set up a bash alias for `sail` to save up on typing:

   Add to `~/.bashrc`:

    ```sh
    alias sail='[ -f sail ] && bash ./sail || bash ./vendor/bin/sail'
    ```

   and refresh the session `source ~/.bashrc` .

2. Clone repo and move into its folder
3. Create environment configuration `cp .env.example .env`. Open `.env` and ask team for empty secret values.
4. Run once
    ```sh
    docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php82-composer:latest composer install --ignore-platform-reqs
    ```
5. Start the containers
    ```sh
    sail up
    ```
6. Populate the database and set up accounts
    ```sh
    sail artisan key:generate
    ```
7. Expose storage folder on HTTP
    ```sh
    sail artisan storage:link
    ```
7. Generate stubs for IDE intellisense
    ```sh
    sail artisan ide-helper:generate
    sail artisan ide-helper:meta
    sail artisan ide-helper:models --nowrite
    ```

**Development**

1. Start containers `sail up`
2. Change code
    1. Run `artisan` with `sail artisan <command>`
    2. Run `composer` with `sail composer <command>`
3. Access on http://localhost
4. When done stop containers `sail down`

**Access email**

Mailhog e-mail capturing service is accessible on http://localhost:8025