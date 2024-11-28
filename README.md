# Conversor de Unidades: Km e Anos-Luz

Este projeto é uma aplicação web desenvolvida em Laravel para converter valores entre quilômetros (Km) e anos-luz.

---

## **Como Funciona**

1. **Front-End:**
   - Tela para converter Km para Anos-Luz.
   - Tela para converter Anos-Luz para Km.
   - Resultados exibidos em um pop-up.

2. **API:**
   - **POST /api/quilometros**: Converte Km para Anos-Luz.
   - **POST /api/anosLuz**: Converte Anos-Luz para Km.

---

## **Passo-a-Passo para Deploy**

### **1. Pré-requisitos**
- PHP 8.1 ou superior
- Composer
- Um servidor web (Apache/Nginx)

### **2. Instalar o Projeto**
1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
2. Instalar dependências:
   ```bash
   composer install
3. Instalar dependências:
   ```bash
   cp .env.example .env
   php artisan key:generate
### **3. Rodar o Servidor**
1. Clone o repositório:
   ```bash
   php artisan serve
Acesse a aplicação em http://127.0.0.1:8000.

### **4.Testes**
1. Rodar os testes da API
    ```bash
    php artisan test

