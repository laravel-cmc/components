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
- @param *bool* fluid

#### x-row
Rows are wrappers for columns. 

- @param *string|null* cols `xs:1..12;sm...xl`
- @param *string|null* align `start|end|center|baseline|stretch`
- @param *string|null* justify `start|end|center|between|around`

#### x-col
- @param *string|null* cols `xs:1..12|auto;sm...xl`, `xs:1` equal to `class="col-1"`, if not set `col`
- @param *string|null* align `start|center|end`
- @param *string|null* order `first|last|1...12`
- @param *string|null* offset `xs:1..12;sm...xl`

## Components
see https://getbootstrap.com/docs/4.5/components

#### x-alert
- @param *string|null* tag
- @param *string|null* theme `primary|secondary|success|danger|warning|info|light|dark`
- @param *bool* dismissible `false`

#### x-alert.dismiss
- @param *string|null* tag `button`

#### x-alert.heading
- @param *string|null* tag `h4`

#### x-alert.link
- default parameters

#### x-badge
- @param *string|null* theme `primary|secondary|success|danger|warning|info|light|dark`
- @param *bool* pill

#### x-breadcrumb
- default parameters

#### x-breadcrumb.item
- @param *bool* active

#### x-btn
see https://getbootstrap.com/docs/4.5/components/buttons/, 
https://getbootstrap.com/docs/4.5/components/button-group/

If type="checkbox" or type="radio" id generate automatically, if not set.

- @param *string* tag `a|button|input`
- @param *string* type
- @param *string|null* name
- @param *string|null* theme `primary|secondary|success|danger|warning|info|light|dark`
- @param *string|null* value
- @param *string|null* label
- @param *string|null* grid `sm|lg`
- @param *bool* block
- @param *bool* active
- @param *bool* disabled
- @param *bool* checked
- @param *string|null* id
- @param *string|null* toggle attribute data-toggle
- @param *string|null* target attribute data-target
- @param *string|null* parent attribute data-parent
- @param *bool* toggled
- @param *bool* split

#### x-btn.group
- @param *bool* toggle
- @param *string|null* grid `sm|lg`
- @param *bool* vertical

#### x-btn.toolbar
- @param *string|null* justify `start|end|center|between|around`

#### x-card
- @param *string|null* color
- @param *string|null* bg
- @param *string|null* bg-gradient
- @param *string|null* border
- @param *string|null* text

#### x-card.body
- @param *string|null* color
- @param *string|null* bg
- @param *string|null* bg-gradient
- @param *string|null* border
- @param *string|null* text

#### x-card.columns
- default parameters

#### x-card.deck
- default parameters

#### x-card.footer
- @param *string|null* color
- @param *string|null* bg
- @param *string|null* bg-gradient
- @param *string|null* border
- @param *string|null* text

#### x-card.group
- default parameters

#### x-card.header
- @param *string|null* color
- @param *string|null* bg
- @param *string|null* bg-gradient
- @param *string|null* border
- @param *string|null* text

#### x-card.img
- @param *string|null* src
- @param *string|null* align `top|overlay`

#### x-card.link
- @param *string|null* color
- @param *string|null* text

#### x-card.text
- @param *string|null* color
- @param *string|null* bg
- @param *string|null* bg-gradient
- @param *string|null* text

#### x-card.title
- @param *string|null* color
- @param *string|null* bg
- @param *string|null* bg-gradient
- @param *string|null* text

#### x-collapse
- @param *bool* show

#### x-dropdown
- @param *bool* btnGroup
- @param *bool* up
- @param *bool* left
- @param *bool* right

#### x-dropdown.divider
- default parameters

#### x-dropdown.header
- default parameters

#### x-dropdown.item
- @param *string|null* type
- @param *bool* active
- @param *bool* disabled

#### x-dropdown.menu
- @param *string|null* $labelledby

#### x-dropdown.text
- default parameters

#### x-form
- @param *string* accept-charset (default `utf-8`)
- @param *string* method (default `get`)
- @param *string|null* enctype (default `application/x-www-form-urlencoded`)
- @param *bool* $file
- @param *bool* $inline
- @param *bool* $validation

#### x-form.close
-- in progress

#### x-form.control
-- in progress

#### x-form.group
- @param *bool* row
- @param *string|null* name (for show error)
- @param *string* invalid `feedback|tooltip` (default `feedback`)

#### x-form.input
- @param *string* type
- @param *string|null* id
- @param *string|null* name
- @param *null* value
- @param *bool* checked
- @param *string|null* grid
- @param *string|null* src

#### x-form.open
-- in progress

#### x-form.select
-- in progress
- @param *string|null* id
- @param *string|null* name
- @param *null* value
- @param *string|null* grid
- @param *array* list

#### x-form.textarea
- @param *string|null* id
- @param *string|null* name
- @param *null* value
- @param *string|null* grid

#### x-nav
- @param *string|null* justify
- @param *bool* vertical
- @param *bool* tabs
- @param *bool* pills
- @param *bool* fill
- @param *bool* justified
- @param *string|null* slug (to associate with child elements)
- @param *string|null* id
- @param *bool* card

#### x-nav.content
- @param *string|null* slug (to associate with parent elements)

#### x-nav.item
- default parameters

#### x-nav.link
- @param *bool* active
- @param *bool* disabled
- @param *string|null* slug
- @param *bool* tab
- @param *bool* pill

#### x-nav.pane
- @param *bool* active
- @param *string|null* slug (to associate with parent elements)

#### x-navbar
- @param *string|null* expand
- @param *string|null* theme
- @param *string|null* bg
- @param *bool* fixed-top
- @param *bool* fixed-bottom
- @param *bool* sticky-top

#### x-navbar.brand
- default parameters

#### x-navbar.collapse
- @param *bool* show

#### x-navbar.text
- default parameters

#### x-navbar.toggler
- see x-btn

#### x-optgroup
- default parameters

#### x-option
- default parameters
