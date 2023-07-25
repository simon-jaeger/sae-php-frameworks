# database

```mermaid
erDiagram
    User ||--o{ Note: "has"
    User ||--o{ Tag: "has"
    Note }o--o{ Tag: "has"
    User ||--o{ Task: "has"
    User ||--o{ Picture: "has"
```
