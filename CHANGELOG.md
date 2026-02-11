# Changelog - Apospan Portfolio

All notable changes and technical decisions for this project are documented in this file.

---

## [2.1.0] - 2026-02-11

### Upgrade Vision & Strategy

This version marks the transition from a static design to a **Dynamic CMS Engine**. The goal was to fully automate the Project Section, ensuring that the high-end visual identity designed in Figma (Gradients & Borders) remains intact while content is managed dynamically via the database.

### AI-Assisted Engineering (The Architect Role)

The implementation followed an **AI-Augmentation** methodology. I acted as the **Architect**, utilizing AI as a "Senior Pair Programmer" for:<br>
🔹 **Query Logic:** Structuring the `WP_Query` with `meta_query` for project filtering and sorting.<br>
🔹 **Refactoring:** Transforming logic flows into clean PHP code and resolving Modal ID conflicts.<br>
🔹 **Optimization:** Ensuring code adherence to WordPress standards (escaping/sanitization).<br>

### Custom PHP Implementation (The Backend)

**Dynamic Shortcodes:**<br>
🔹 `[my_projects_loop]`: The core engine that automatically fetches the 3 latest pinned projects.<br>
🔹 `[featured_image_callback]`: Custom snippet for image URL retrieval, bypassing page-builder limitations.<br>
🔹 **Smart Sorting Logic:** Implemented an architecture where the "Featured" project (value 'f') always appears first, followed by "Secondary" projects (value 's').<br>
🔹 **ACF Integration:** Full control over links (`project_url`) and labels (`button_text`) via Advanced Custom Fields.<br>
🔹 **Native Modal System:** Custom PHP/JS solution using dynamic `$p_id` for unique IDs, eliminating common page-builder popup bugs.

### Advanced CSS & UI Architecture

🔹 **Modern Tech Aesthetic:** Applied `linear-gradient` on the `border-box` for neon borders (#AF40FF -> #00DDEB) using `background-clip`.<br>
🔹 **Automated Layout Hierarchy:** - Utilized `:nth-child(1)` for the **Hero Card** (span 2 columns, 900px max-width). - Utilized `:nth-child(n+2)` for **Secondary Cards** (2-column grid).<br>
🔹 **Responsive Engineering:** Full refactor below **1119px**. The grid converts to a 1-column stack, images scale to `221x232px`, and buttons are "locked" at the center for optimal mobile UX.

### Workflow & Security (The Pro Path)

🔹 **Multi-Stage Deployment:**

1. **Local WP:** Prototyping and PHP code development in a local environment. <br>
2. **Staging (Hostinger):** Testing the dynamic grid and responsive breakpoints in a live-copy environment.<br>
3. **Production Deployment:** Safe code deployment to the live site.<br>

🔹 **Translation Ready:** Full Gettext (`_e()`) support for TranslatePress compatibility.

---

## [1.0.0] - 2025-12-20

### Added

🔹 Initial Portfolio launch.<br>
🔹 Design in Figma and implementation via Breakdance Builder.<br>
🔹 Basic contact form (Fluent Forms) and bilingual support.

<details>
  <summary><b>Κάντε κλικ για να δείτε την περιγραφή στα Ελληνικά</b></summary>

# Changelog - Apospan Portfolio

Όλες οι σημαντικές αναβαθμίσεις και οι τεχνικές αποφάσεις του project τεκμηριώνονται σε αυτό το αρχείο.

---

## [2.1.0] - 2026-02-11

### Στρατηγική & Όραμα Αναβάθμισης

Η έκδοση αυτή σηματοδοτεί τη μετάβαση από το στατικό design σε ένα **Dynamic CMS Engine**. Ο στόχος ήταν η πλήρης αυτοματοποίηση του Project Section, διασφαλίζοντας ότι η high-end αισθητική που σχεδιάστηκε στο Figma (Gradients & Borders) παραμένει αναλλοίωτη, ενώ το περιεχόμενο διαχειρίζεται δυναμικά από τη βάση δεδομένων.

### AI-Assisted Engineering (The Architect Role)

Η υλοποίηση έγινε με τη μέθοδο του **AI-Augmentation**. Λειτούργησα ως **Architect**, χρησιμοποιώντας το AI ως "Senior Pair Programmer" για:
🔹 **Query Logic:** Σύνταξη του `WP_Query` με `meta_query` για το φιλτράρισμα και την ταξινόμηση των projects.<br>
🔹 **Refactoring:** Μετατροπή των logic flows σε καθαρό PHP κώδικα και επίλυση των ID conflicts στα Modals.<br>
🔹 **Optimization:** Διασφάλιση ότι ο κώδικας ακολουθεί τα WordPress standards (escaping/sanitization).<br>

### Custom PHP Implementation (The Backend)

**Dynamic Shortcodes:**
`[my_projects_loop]`: Το κεντρικό engine που ανακτά αυτόματα τα 3 τελευταία pinned projects.
`[featured_image_callback]`: Custom snippet για την ανάκτηση του URL της εικόνας, παρακάμπτοντας τους περιορισμούς του page builder.<br>
🔹 **Smart Sorting Logic:** Υλοποίηση αρχιτεκτονικής όπου το "Featured" project (τιμή 'f') εμφανίζεται πάντα πρώτο, ακολουθούμενο από τα "Secondary" (τιμή 's').<br>
🔹 **ACF Integration:** Πλήρης έλεγχος των links (`project_url`) και των labels (`button_text`) μέσω Advanced Custom Fields.<br>
🔹 **Native Modal System:** Custom PHP/JS λύση που χρησιμοποιεί δυναμικά το `$p_id` για μοναδικά IDs, εξαλείφοντας τα bugs των page-builder popups.

### Advanced CSS & UI Architecture

🔹 **Modern Tech Aesthetic:** Εφαρμογή `linear-gradient` στο `border-box` για τα neon borders (#AF40FF -> #00DDEB) με χρήση `background-clip`.<br>
🔹 **Automated Layout Hierarchy:**
🔹 Χρήση `:nth-child(1)` για το **Hero Card** (span 2 columns, 900px max-width).<br>
🔹 Χρήση `:nth-child(n+2)` για τα **Secondary Cards** (grid 2-columns).<br>
🔹 **Responsive Engineering:** Πλήρης επανασχεδιασμός κάτω από τα **1119px**. Το grid μετατρέπεται σε 1-column stack, οι εικόνες προσαρμόζονται σε `221x232px` και τα κουμπιά "κλειδώνουν" στο κέντρο για βέλτιστο mobile UX.

### Workflow & Security (The Pro Path)

🔹 **Multi-Stage Deployment:**

1. **Local WP**: Prototyping και ανάπτυξη του PHP κώδικα σε τοπικό περιβάλλον.
2. **Staging (Hostinger):** Δοκιμές του δυναμικού grid και των responsive breakpoints σε live-copy περιβάλλον.
3. **Production Deployment:** Ασφαλής μετάβαση του κώδικα στο live site.

🔹 **Translation Ready:** Πλήρης υποστήριξη Gettext (`_e()`) για συμβατότητα με το TranslatePress.

---

## [1.0.0] - 2025-12-20

### Added

🔹 Αρχική κυκλοφορία του Portfolio.<br>
🔹 Σχεδιασμός στο Figma και υλοποίηση σε Breakdance Builder.<br>
🔹 Βασική φόρμα επικοινωνίας (Fluent Forms) και δίγλωσση υποστήριξη.
