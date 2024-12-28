# Laragon Custom

Welcome to the **Laragon-Custom**! This project customizes the default Laragon homepage by integrating modern design elements, a dynamic project list, and a dark mode toggle for better user experience.

---

## 🚀 Features

- **Dynamic Project Listing**: Automatically fetches and displays project directories from the `www` folder.
- **Dark Mode**: Easily switch between light and dark themes.
- **Responsive Design**: Fully responsive layout for desktop, tablet, and mobile devices.
- **CSS Animations**: Smooth transitions and engaging animations.
- **Customizable**: Simple to edit styles, logos, and content.

---

## 📂 File Structure

```
www/
├── index.php       # Main PHP file for homepage logic
└── logo.svg        # Default logo for the homepage
```

---

## 🌟 How It Works

1. **System Information**: Displays PHP version, server type, and document root dynamically using PHP.
2. **Dark Mode Toggle**: Built using JavaScript to switch themes dynamically.
3. **Project Grid**: Scans the `www` directory and creates clickable links for each project.

---

## 🛠️ Setup Instructions

### Step 1: Clone or Download
Clone this repository or download the ZIP file.

```bash
git clone https://github.com/habibiahmada/laragon-custom.git
```

### Step 2: Replace Laragon's Default Homepage
Copy the `index.php` files from this repository into the root of your Laragon `www` directory.

```bash
C:\laragon\www\
```
replace your `index.php` files with new file from this repository and rename line which contain `[YOURNAME]` to your name or anything you want

### Step 3: Start Laragon
Launch Laragon and ensure that Apache or your preferred server is running.

### Step 4: Access the Homepage
Open your browser and go to:

```
http://localhost
```

---

## 🎨 Customization Guide

### Change Colors or Fonts
Edit the `<style>` block in `index.php` to adjust colors, animations, or fonts.

### Replace the Logo
Swap out `logo.svg` with your custom logo. Ensure the new file is also named `logo.svg`.

### Add or Remove Projects
Place your project folders in Laragon's `www` directory. The homepage automatically detects and displays them.

---


## 🤝 Contributions

Contributions are welcome! Here's how you can help:

1. Fork this repository.
2. Create a feature branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m "Add new feature"`).
4. Push to your branch (`git push origin feature/your-feature`).
5. Submit a pull request.

---

## 🛠️ Built With

- **HTML5** for structure.
- **CSS3** for design and animations.
- **PHP** for dynamic functionality.
- **JavaScript** for theme toggling.

---

## 📧 Contact

If you have any questions or feedback, feel free to reach out:

- **Name**: Habibi Ahmad Aziz  
- **Email**: habibiahmadaziz@gmail.com  
- **GitHub**: [habibiahmada](https://github.com/habibiahmada)

---

```
Happy Coding! 🎉
