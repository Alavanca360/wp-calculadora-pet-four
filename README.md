
# 🐶 Calculadora de Alimentação para Cães Pet Four - por Alavanca360

Um plugin WordPress responsivo e visualmente atraente, desenvolvido para calcular a quantidade ideal de ração diária com base no **peso do pet**, seguindo os padrões nutricionais da **Pet Four**, com interface inspirada em aplicações modernas e amigáveis.

---

## 🎯 Objetivo

Este plugin oferece aos tutores de cães e gatos uma ferramenta simples e eficaz para descobrir **quantos gramas por dia** de ração devem oferecer ao pet, considerando:

- Tipo de animal (Cachorro ou Gato)
- Peso em kg

---

## ✨ Interface do Usuário

A interface segue o visual da imagem base enviada, com componentes organizados e estilizados para oferecer uma excelente experiência ao usuário.

### Elementos:
- Botão de seleção: **Cachorro** ou **Gato**
- Campo numérico: **Peso (kg)**
- Botão de ação: `Calcular`
- Resultado: exibe a **quantidade ideal em gramas por dia**

### 🎨 Paleta de Cores

| Elemento                | Cor                         | HEX         |
|-------------------------|-----------------------------|-------------|
| Fundo geral             | Creme claro                 | `#FFF9F5`   |
| Botões ativos           | Laranja vibrante            | `#FF7C1D`   |
| Texto botões ativos     | Branco                      | `#FFFFFF`   |
| Texto botões inativos   | Cinza escuro                | `#2C2C2C`   |
| Contornos e ícones      | Cinza médio                 | `#D9D9D9`   |

---

## 🧠 Lógica de Cálculo

A fórmula utilizada é baseada na regra de três proporcional, com dados retirados da planilha oficial da Pet Four.

### Cães:
- 95 kg → 67,86 g/dia
- Fórmula:  
  \[
  \text{gramas/dia} = \left(\frac{67.86}{95}\right) \times \text{peso do cão}
  \]

### Gatos:
- 100 kg → 71,43 g/dia  
- Fórmula:  
  \[
  \text{gramas/dia} = \left(\frac{71.43}{100}\right) \times \text{peso do gato}
  \]

> **Importante**: Apenas o peso é inserido pelo usuário. A idade e nível de atividade não são considerados nesta versão inicial.

---

## 🧩 Estrutura do Plugin

```
wp-calculadora-pet-four/
│
├── assets/
│   ├── style.css             # Estilos da interface
│   └── script.js             # Scripts de interação
│
├── includes/
│   ├── calculator-logic.php  # Lógica do cálculo com base no peso
│
├── templates/
│   └── form-ui.php           # Formulário estilizado
│
├── wp-calculadora-pet-four.php  # Arquivo principal do plugin
├── readme.txt
└── README.md
```

---

## ⚙️ Instalação

1. Faça upload da pasta `wp-calculadora-pet-four` para `/wp-content/plugins/`
2. Ative o plugin via painel WordPress > Plugins
3. Use o shortcode abaixo onde desejar exibir o formulário:

```php
[pet_food_calculator]
```

---

## 🚀 Recursos Futuramente Adicionados

- Suporte a idade e nível de atividade
- Exportação em PDF do cálculo
- Histórico de cálculos por usuário logado
- Painel de configuração para ajustar fórmulas e coeficientes
- Tradução automática (i18n)

---

## 🛠️ Customização

- Altere as cores e elementos visuais em `assets/style.css`
- Modifique as regras de cálculo em `includes/calculator-logic.php`
- Ajuste o layout no `templates/form-ui.php`

---

## 📃 Licença

MIT License © 2025 Alavanca360 / Pet Four

---

## 📫 Suporte

Para dúvidas, sugestões ou melhorias, entre em contato com:

📧 suporte@alavanca360.com  
🌐 www.alavanca360.com

---

Desenvolvido com carinho por **Alavanca360** em parceria com **Pet Four** para cuidar melhor da alimentação dos seus pets. 🐾
