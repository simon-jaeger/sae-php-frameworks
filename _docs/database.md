# database

```mermaid
erDiagram
    User ||--o{ Note: "has"
    User ||--o{ Task: "has"
    User ||--o{ Article: "has"
    Article ||--o{ Comment: "has"
    User ||--o{ Comment: "has"
```
