# FishMust.Live

FishMust.Live is a social awareness website where users can visualize areas affected by plastic pollution on a map, share their own observations of plastic pollution with location information, and view plastic pollution shared by other users.

## Technologies Used

- PHP
- Laravel
- AWS
- CSS
- Bootstrap
- JavaScript
- Mapbox API
- MySQL

## Installation

To set up the project locally, follow the steps below:

1. Clone the repository:

   ```shell
   $ git clone https://github.com/syaycili/fishmustlive.git
   $ cd fishmustlive
   ```

2. Install dependencies:

   ```shell
   $ composer install
   $ npm install
   ```

3. Configure the environment variables:

   - Create a copy of the `.env.example` file and name it `.env`.
   - Update the necessary environment variables such as database credentials, AWS configuration, and Mapbox API key in the `.env` file.

4. Generate an application key:

   ```shell
   $ php artisan key:generate
   ```

5. Set up the database:

   - Create a MySQL database for the project.
   - Update the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables in the `.env` file with your database details.

   ```shell
   $ php artisan migrate
   ```

6. Compile assets:

   ```shell
   $ npm run dev
   ```

7. Start the local development server:

   ```shell
   $ php artisan serve
   ```

   The website should now be accessible at `http://localhost:8000`.

## Usage

Provide instructions on how to use the website. Include any important features or functionalities.

- Users can sign up or log in to the website.
- Once logged in, they can view the map showing areas affected by plastic pollution.
- Users can click on the map to share their observations of plastic pollution, including location information.
- Users can view plastic pollution shared by other users on the map.
- Additional features and functionalities...

## Contributing

If you want to contribute to this project, follow the steps below:

1. Fork this repository.
2. Create a new branch: `git checkout -b my-feature`.
3. Make your changes and commit them: `git commit -m 'Add my feature'`.
4. Push to the branch: `git push origin my-feature`.
5. Submit a pull request.

Please make sure to update tests as appropriate and provide a detailed explanation of your changes.

## License

Specify the license under which your project is distributed. For example:

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
