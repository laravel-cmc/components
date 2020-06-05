# components
Laravel 7 Components based on Bootstrap 4.5

https://laravel.com/docs/7.x/blade#components
### General
Almost all components have the default parameters "tag"and"content".
Attributes of the area, tabindex, role, and data types are filled in automatically.
If you added your own theme colors or grid sizes, they will work, since the code is not tied to constant values.

## Grid
see
https://getbootstrap.com/docs/4.5/layout/grid/#row-columns,
https://getbootstrap.com/docs/4.5/layout/grid/#alignment,
https://getbootstrap.com/docs/4.5/layout/grid/#order-classes

#### x-container
Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.
- **attribute** *bool* fluid

#### x-row
Rows are wrappers for columns. 

- **attribute** *string|null* cols `xs:1..12;sm...xl`
- **attribute** *string|null* align `start|end|center|baseline|stretch`
- **attribute** *string|null* justify `start|end|center|between|around`

#### x-col
- **attribute** *string|null* cols `xs:1..12|auto;sm...xl`, `xs:1` equal to `class="col-1"`, if not set `col`
- **attribute** *string|null* align `start|center|end`
- **attribute** *string|null* order `first|last|1...12`
- **attribute** *string|null* offset `xs:1..12;sm...xl`

## Components
see https://getbootstrap.com/docs/4.5/components

#### x-alert
- **attribute** *string|null* tag
- **attribute** *string|null* theme `primary|secondary|success|danger|warning|info|light|dark`
- **attribute** *bool* dismissible `false`

#### x-alert.dismiss
- **attribute** *string|null* tag `button`

#### x-alert.heading
- **attribute** *string|null* tag `h4`

#### x-alert.link
- default parameters

---

#### x-badge
- **attribute** *string|null* theme `primary|secondary|success|danger|warning|info|light|dark`
- **attribute** *bool* pill

---

#### x-breadcrumb
- default parameters

#### x-breadcrumb.item
- **attribute** *bool* active

---

#### x-btn
see https://getbootstrap.com/docs/4.5/components/buttons/, 
https://getbootstrap.com/docs/4.5/components/button-group/

If type="checkbox" or type="radio" id generate automatically, if not set.

- **attribute** *string* tag `a|button|input`
- **attribute** *string* type
- **attribute** *string|null* name
- **attribute** *string|null* theme `primary|secondary|success|danger|warning|info|light|dark`
- **attribute** *string|null* value
- **attribute** *string|null* label
- **attribute** *string|null* grid `sm|lg`
- **attribute** *bool* block
- **attribute** *bool* active
- **attribute** *bool* disabled
- **attribute** *bool* checked
- **attribute** *string|null* id
- **attribute** *string|null* toggle attribute data-toggle
- **attribute** *string|null* target attribute data-target
- **attribute** *string|null* parent attribute data-parent
- **attribute** *bool* toggled
- **attribute** *bool* split

#### x-btn.group
- **attribute** *bool* toggle
- **attribute** *string|null* grid `sm|lg`
- **attribute** *bool* vertical

#### x-btn.toolbar
- **attribute** *string|null* justify `start|end|center|between|around`

---

#### x-card
- **attribute** *string|null* color
- **attribute** *string|null* bg
- **attribute** *string|null* bg-gradient
- **attribute** *string|null* border
- **attribute** *string|null* text

#### x-card.body
- **attribute** *string|null* color
- **attribute** *string|null* bg
- **attribute** *string|null* bg-gradient
- **attribute** *string|null* border
- **attribute** *string|null* text

#### x-card.columns
- default parameters

#### x-card.deck
- default parameters

#### x-card.footer
- **attribute** *string|null* color
- **attribute** *string|null* bg
- **attribute** *string|null* bg-gradient
- **attribute** *string|null* border
- **attribute** *string|null* text

#### x-card.group
- default parameters

#### x-card.header
- **attribute** *string|null* color
- **attribute** *string|null* bg
- **attribute** *string|null* bg-gradient
- **attribute** *string|null* border
- **attribute** *string|null* text

#### x-card.img
- **attribute** *string|null* src
- **attribute** *string|null* align `top|overlay`

#### x-card.link
- **attribute** *string|null* color
- **attribute** *string|null* text

#### x-card.text
- **attribute** *string|null* color
- **attribute** *string|null* bg
- **attribute** *string|null* bg-gradient
- **attribute** *string|null* text

#### x-card.title
- **attribute** *string|null* color
- **attribute** *string|null* bg
- **attribute** *string|null* bg-gradient
- **attribute** *string|null* text

---

#### x-carousel
- **attribute** *string|null* id

#### x-carousel.caption
- default parameters

#### x-carousel.indicators
- **attribute** *string|null* parent-id
- **attribute** *int|null* count
- **attribute** *int* active

#### x-carousel.inner
- default parameters

#### x-carousel.item
- **attribute** *bool* active

#### x-carousel.next
- default parameters

#### x-carousel.prev
- default parameters

---

#### x-collapse
- **attribute** *bool* show

---

#### x-dropdown
- **attribute** *bool* btn-group
- **attribute** *bool* up
- **attribute** *bool* left
- **attribute** *bool* right

#### x-dropdown.divider
- default parameters

#### x-dropdown.header
- default parameters

#### x-dropdown.item
- **attribute** *string|null* type
- **attribute** *bool* active
- **attribute** *bool* disabled

#### x-dropdown.menu
- **attribute** *string|null* $labelledby

#### x-dropdown.text
- default parameters

---

#### x-form
- **attribute** *string* accept-charset (default `utf-8`)
- **attribute** *string* method (default `get`)
- **attribute** *string|null* enctype (default `application/x-www-form-urlencoded`)
- **attribute** *bool* $file
- **attribute** *bool* $inline
- **attribute** *bool* $validation

#### x-form.close
-- in progress

#### x-form.control
-- in progress

#### x-form.group
- **attribute** *bool* row
- **attribute** *string|null* name (for show error)
- **attribute** *string* invalid `feedback|tooltip` (default `feedback`)

#### x-form.input
- **attribute** *string* type
- **attribute** *string|null* id
- **attribute** *string|null* name
- **attribute** *null* value
- **attribute** *bool* checked
- **attribute** *string|null* grid
- **attribute** *string|null* src

#### x-form.open
-- in progress

#### x-form.select
-- in progress
- **attribute** *string|null* id
- **attribute** *string|null* name
- **attribute** *null* value
- **attribute** *string|null* grid
- **attribute** *array* list

#### x-form.textarea
- **attribute** *string|null* id
- **attribute** *string|null* name
- **attribute** *null* value
- **attribute** *string|null* grid

---

#### x-jumbotron
- **attribute** *bool* fluid

---

#### x-list-group
- **attribute** *string* tag `ul|div` (default `ul`)
- **attribute** *bool* flush
- **attribute** *string* horizontal `xs|sm|md|lg|xl`

#### x-list-group.item
- **attribute** *string* tag `a|li|button|input` (default `li`)
- **attribute** *bool* action
- **attribute** *bool* active
- **attribute** *bool* disabled

---

#### x-nav
- **attribute** *string|null* justify
- **attribute** *bool* vertical
- **attribute** *bool* tabs
- **attribute** *bool* pills
- **attribute** *bool* fill
- **attribute** *bool* justified
- **attribute** *string|null* slug (to associate with child elements)
- **attribute** *string|null* id
- **attribute** *bool* card

#### x-nav.content
- **attribute** *string|null* slug (to associate with parent elements)

#### x-nav.item
- default parameters

#### x-nav.link
- **attribute** *bool* active
- **attribute** *bool* disabled
- **attribute** *string|null* slug
- **attribute** *bool* tab
- **attribute** *bool* pill

#### x-nav.pane
- **attribute** *bool* active
- **attribute** *string|null* slug (to associate with parent elements)

---

#### x-navbar
- **attribute** *string|null* expand
- **attribute** *string|null* theme
- **attribute** *string|null* bg
- **attribute** *bool* fixed-top
- **attribute** *bool* fixed-bottom
- **attribute** *bool* sticky-top

#### x-navbar.brand
- default parameters

#### x-navbar.collapse
- **attribute** *bool* show

#### x-navbar.text
- default parameters

#### x-navbar.toggler
- see x-btn

---

#### x-optgroup
- default parameters

---

#### x-option
- default parameters
