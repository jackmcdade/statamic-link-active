# Link Active for Statamic ![Statamic 2.0](https://img.shields.io/badge/statamic-2.0-blue.svg?style=flat-square)

Set the `href` for an anchor link and add an active class if on that URL.

## Usage

```
<a {{ link_active url="/about" }}>About</a>

// Renders (when on /about)
<a href="/about" class="active">About</a>
```

## Parameters

- `url` (any URL)
- `class` (active)
