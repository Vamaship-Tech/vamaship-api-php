# PHP Script for Vamaship API :ship:
API Document: [https://www.vamaship.com/integrations-api](https://www.vamaship.com/integrations-api)

# System Requirements :gear:
- PHP 5.4 or Later
- Composer 1.9.1 or Later
- Vamaship API Key (You may register on [https://ecom3stagingapi.vamaship.com/](https://ecom3stagingapi.vamaship.com/) to generate a Test API Key.)

# Installation Instructions :memo:
- Clone this repository on your local.
- run `composer install` in the cloned Directory.
- Add your Vamaship API Token in **globals.php** file.
- Done.

# Files and Folders :open_file_folder:
- .gitignore: Git Ignore file to exclude Composer's vendor directory from the VCS.
- book_quote.php: Book a Shipment.
- composer.json: Composer file with all the dependencies.
- download_resource.php: Download the Shipping Documents.
- get_pincode_coverage: Get the Pincode Coverage for the given service.
- get_quote.php: Get the Shipment Quote.
- globals.php: File containing global settings that are being used throughout the codebase.
- LICENCE: MIT Licence file.
- polling.php: Sample php script to call the Polling API for Booked Shipments.
- README.md: Coincidently the file you are reading right now.
- track_shipments.php: File containing code to call vamaship Tracking API.