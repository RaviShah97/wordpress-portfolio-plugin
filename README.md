# wordpress-portfolio-plugin
A simple and customizable WordPress plugin for showcasing portfolio items using a custom post type. Use the [portfolio] shortcode to easily integrate and display your portfolio on your website.

# Project Name

**Description:** A comprehensive WordPress portfolio plugin and a single portfolio item template for enhancing your website's portfolio showcase.

## Installation

### 1. Installing the Portfolio Plugin

#### Manual Installation

1. Download the plugin zip file from the GitHub repository.

2. Log in to your WordPress admin dashboard.

3. Navigate to **Plugins > Add New**.

4. Click on the **Upload Plugin** button.

5. Choose the downloaded `my-portfolio-plugin.zip` file and click **Install Now**.

6. Once installed, click **Activate Plugin**.

#### Installation via WordPress Admin (Alternative)

1. Log in to your WordPress admin dashboard.

2. Navigate to **Plugins > Add New**.

3. Search for "My Portfolio Plugin."

4. Find the "My Portfolio Plugin" in the search results.

5. Click **Install Now** and then **Activate** the plugin.

### 2. Moving the Portfolio Item Template to the Theme Folder

1. Download the `content-portfolio.php` file from the GitHub repository.

2. Access your WordPress site's server or file system.

3. Navigate to the theme folder where you want to add the portfolio template. Typically, themes are located in the `wp-content/themes/` directory.

4. Upload `content-portfolio.php` to the chosen theme folder.

### 3. Using the Portfolio Template

1. After uploading the template, create or edit a page where you want to display a single portfolio item.

2. In the page editor, locate the "Attributes" section on the right.

3. Under "Template," choose "Portfolio Item" or a similar option, depending on your theme.

4. Update or publish the page.

5. View the page, and the portfolio item will be displayed using the custom template.

## Styling and Customization

Feel free to customize the appearance of your portfolio items by adjusting the CSS styles in the `content-portfolio.php` file and exploring additional styling options in your WordPress theme.

# (Optional for Elementor Pro)Custom Portfolio Post Theme

**Note: Make sure you have Elementor Pro installed before proceeding with the instructions below.**

## Download Custom Portfolio Template

1. Click on the Custom-Portfolio-Post.json from the Main Repository section to download the custom-made portfolio template in JSON format.

## Installation Instructions

### 1. Upload Custom Portfolio Template

1. After downloading, log in to your WordPress admin dashboard.

2. Navigate to **Templates > Theme Builder** in the Elementor menu.

3. Click the "Import Templates" button.

4. Choose the downloaded JSON file (e.g., `Custom-Portfolio-Template.json`) and click **Import Now**.

5. Set the condition to "Portfolio Items" or  "Portfolio" whichever you see when you try to publish it.

### 2. Add Code to functions.php

1. Open the `functions.php` file of your theme (located in the theme folder).

2. Add the following code snippet at the end of the file:

   ```php
   function custom_portfolio_template($template) {
       // Check if it's a single portfolio post
       if (is_singular('portfolio')) {
           // Use your custom template file path
           $custom_template = locate_template('Custom-Portfolio-Post.php');

           // If the custom template file exists, use it
           if ($custom_template) {
               return $custom_template;
           }
       }

       return $template;
   }

   add_filter('template_include', 'custom_portfolio_template');

---

*Note: Include any additional information or customization options relevant to your project.*



# Portfolio Posts Instruction on How to Use It

**1) Add Portfolio Items:**

- Visit your WordPress admin dashboard.
- Navigate to "Portfolio" or "Custom Portfolio Items."
- Create new portfolio items with titles, content, and optional details like project URL and client name.

**2) Display Portfolio Items:**

- Open or create a page using Elementor.
- Add a shortcode widget to the page.
- Use the `[portfolio]` shortcode in the widget settings.
  *Note: Do not leave spaces between "portfolio" and brackets to ensure the shortcode is properly recognized.*

**3) Customize Display:**

- Customize the portfolio section using Elementor's styling options.
- Apply custom styles if desired by adding them to the Advanced or Custom CSS settings.

**4) Control Portfolio Item Count:**

- Use the count attribute in the shortcode to control the number of portfolio items.
  *Example: [portfolio count=2]* to display 2 portfolio items.

---

# Plugin Images

## 1) Menu Overview

![Menu Overview](https://vistavibes.in/wp-content/uploads/2023/12/Menu-Overview.png)

## 2) Plugin Instructions

![Plugin Instructions](https://vistavibes.in/wp-content/uploads/2023/12/Plugin-Instructions.png)

## 3) Plugin UI-1

![Plugin UI-1](https://vistavibes.in/wp-content/uploads/2023/12/Plugin-UI-1.png)

## 4) Plugin UI-2

![Plugin UI-2](https://vistavibes.in/wp-content/uploads/2023/12/Plugin-UI-2.png)

## 5) Projects

![Projects](https://vistavibes.in/wp-content/uploads/2023/12/Projects.png)

## 6) Shortcode Result-1

![Shortcode Result-1](https://vistavibes.in/wp-content/uploads/2023/12/Shortcode-Result-1.png)

## 7) Shortcode Result-2

![Shortcode Result-2](https://vistavibes.in/wp-content/uploads/2023/12/Shortcode-Result-2.png)

## 8) Shortcode Result-3

![Shortcode Result-3](https://vistavibes.in/wp-content/uploads/2023/12/Shortcode-Result-3.png)

## 9) Count

![Count](https://vistavibes.in/wp-content/uploads/2023/12/Count.png)






*Note: Feel free to adjust Elementor styling and explore additional customization options according to your specific project needs.*
