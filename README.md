<div align="center">
<h1 align="center">
Pocsquare Software
</h1>
<h3>◦Developed with the software and tools listed below.</h3>

<p>
<span>HTML</span>,
<span>TailwindCSS</span>,
<span>jQuery</span>,
<span>AJAX</span>,
<span>PHP</span>,
<span>Composer</span>,
<span>MySQL</span>,
</P>

![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/Yuberley/ChatGPT-App-React-Native-TypeScript?style&color=5D6D7E)
![GitHub commit activity](https://img.shields.io/github/commit-activity/m/Yuberley/ChatGPT-App-React-Native-TypeScript?style&color=5D6D7E)
![GitHub license](https://img.shields.io/github/license/Yuberley/ChatGPT-App-React-Native-TypeScript?style&color=5D6D7E)

</div>

---

## 📒 Table of Contents

- [📒 Table of Contents](#-table-of-contents)
- [📍 Overview](#-overview)
- [⚙️ Features](#-features)
- [🚀 Getting Started](#-getting-started)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)

---

## 📍 Overview

Pocsquare is web-based software that allows users to find places quickly and accurately. The software is divided into two parts: Public and Private. <br /><br />
The public part is accessible to all users and you can search for specific places (such as restaurants, institutions, avenues, etc.) just by typing a zip code or key words (such as the name of the area, block, etc.). When searching, the user is presented with complete information regarding the location sought (Province, institution number, etc) and a map with directions to the location is also presented.<br /><br />
The private part, which can only be accessed depending on authentication and authorization, is where new locations are inserted into the system. In this part, the operator can register data about a new location (such as province, neighborhood, etc.) and its respective location on the map. In this part we also have the incredible functionality of passing massive data from Excel spreadsheets to a MySQL database.

---

## ⚙️ Features

| Feature                | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| ---------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **⚙️ Architecture**    | The codebase follows a modular architecture, separating different functionalities into components and screens. It uses a stack navigation pattern for screen transition. The server-side is implemented using an PHP and AJAX, which handles requests and communicates with a database for generating responses. The client-side is built with HTML, TailwindCSS and jQuery, ensuring type safety and scalability. Overall, the architecture allows for easy extensibility and maintainability. |
| **📖 Documentation**   | The codebase lacks comprehensive documentation. While some files have summary comments, the overall documentation is limited. Additional comments and inline explanations could improve the understanding of the codebase for future developers.                                                                                                                                                                                                                                                |
| **🔗 Dependencies**    | The codebase relies on various external libraries such as jQuery, AJAX, TailwindCSS, and axios for client-side development. On the server-side, it utilizes phpoffice/phpspreadsheet, and dotenv for handling API requests and managing environment variables. The codebase includes a package.json and composer.json files that lists all the dependencies.                                                                                                                                    |
| **🧩 Modularity**      | The codebase demonstrates good modularity by organizing functionality into components and screens. Each component focuses on a specific task, promoting reusability and maintainability. The use of a DataProvider context ensures centralized state management, enhancing the separation of concerns. However, there are opportunities to further modularize specific code sections for improved code clarity and organization.                                                                |
| **✔️ Testing**         | There is no explicit testing framework or tests provided in the codebase. Incorporating unit tests, integration tests, and end-to-end tests would enhance the codebase's reliability, correctness, and maintainability. Adding a testing framework like Jest Testing Library would be beneficial for thorough testing coverage.                                                                                                                                                                 |
| **⚡️ Performance**    | The codebase appears to handle performance reasonably well. However, without specific performance metrics or details, it is challenging to provide a comprehensive evaluation. To optimize performance further, considerations like code profiling, performance monitoring tools, and caching mechanisms could be implemented.                                                                                                                                                                  |
| **🔐 Security**        | The codebase does not explicitly address security measures other than fetching messages from an API using POST requests. Depending on the API's implementation, additional security measures may be required, such as input sanitization and data validation for user-generated content, rate limiting to prevent abuse, and secure communication protocols like HTTPS.                                                                                                                         |
| **🔀 Version Control** | The codebase utilizes Git for version control as shown by the presence of a GitHub repository. However, no explicit version control strategies or tools are mentioned in the repository itself. It would be beneficial to include a clear version control strategy, branching model, and commit guidelines in the project documentation or a version control guide.                                                                                                                             |
| **🔌 Integrations**    | The codebase                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |

---

## 🚀 Getting Started

### ✔️ Prerequisites

Before you begin, ensure that you have the following prerequisites installed:

> - `ℹ️ NodeJS`18.X
> - `ℹ npm 8.X`
> - `ℹ️ Comomposer`
> - `ℹ️ Apache and MySQL Server (Linke XAMPP, MAMP or LAMP`

### 💻 Installation

1. Clone the pocsquare repository:

```sh
git clone hhttps://github.com/Jay-Ubisse/pocsquare/
```

2. Change to the project directory:

```sh
cd pocsquare
```

3. Install the dependencies:

```sh
npm install
```

```sh
composer install
```

### 🎮 Using pocsquare

```sh
run de Apache and MySQL server and acces the root folder
```

---

## 🤝 Contributing

Contributions are always welcome! Please follow these steps:

1. Fork the project repository. This creates a copy of the project on your account that you can modify without affecting the original project.
2. Clone the forked repository to your local machine using a Git client like Git or GitHub Desktop.
3. Create a new branch with a descriptive name (e.g., `new-feature-branch` or `bugfix-issue-123`).

```sh
git checkout -b new-feature-branch
```

4. Make changes to the project's codebase.
5. Commit your changes to your local branch with a clear commit message that explains the changes you've made.

```sh
git commit -m 'Implemented new feature.'
```

6. Push your changes to your forked repository on GitHub using the following command

```sh
git push origin new-feature-branch
```

7. Create a new pull request to the original project repository. In the pull request, describe the changes you've made and why they're necessary.
   The project maintainers will review your changes and provide feedback or merge them into the main branch.

---

## 📄 License

This project is licensed under the `ℹ️  INSERT-LICENSE-TYPE` License. See the [LICENSE](https://docs.github.com/en/communities/setting-up-your-project-for-healthy-contributions/adding-a-license-to-a-repository) file for additional info.

---
