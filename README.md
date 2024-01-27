# Event Registration System v0.1

This simple event registration system allows users to add and view events. The program is written in PHP and utilizes a basic HTML structure for the user interface. The events are stored in the session, allowing for simple data persistence.

## Getting Started

To use this program, follow these steps:

1. **Clone the Repository:**
    
    - Clone this repository to your local machine:
        
        ```
        
        git clone https://github.com/oCHRONOSo/Events_log.git
        
2. **Setup XAMPP for Windows:**
    
    - Install XAMPP on your Windows machine.
    - Move the cloned repository into the `htdocs` directory of your XAMPP installation.
3. **Setup Apache for Linux:**
    
    - Install Apache on your Linux machine. On Ubuntu, you can use the following command:
        
        ```
        
        sudo apt-get update sudo apt-get install apache2
        
    - Move the cloned repository into the Apache web server directory, typically `/var/www/html`.
        
4. **Start the Server:**
    
    - For XAMPP on Windows, start the Apache server using the XAMPP Control Panel.
        
    - For Apache on Linux, start the Apache server with:
        
        ```
        
        sudo service apache2 start
        
5. **Access the Application:**
    
    - Open your web browser and navigate to http://localhost/index.php.

## Usage

- The main page (`index.php`) allows you to add new events. Fill in the required information and click the "Registrar" button.
- The "Registros" page (`registros.php`) displays a list of registered events. You can also delete events from this page.

**Note:** Make sure that your PHP version supports the code, and you have the necessary permissions to run a web server.
