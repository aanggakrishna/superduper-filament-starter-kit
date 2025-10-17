# 🚀 Quick Reference - Green Theme Design System

## 🎨 Color Classes

### Primary (Green)
```html
<!-- Backgrounds -->
<div class="bg-primary-50">Lightest</div>
<div class="bg-primary-600">Main</div>
<div class="bg-primary-900">Darkest</div>

<!-- Text -->
<p class="text-primary-600">Main green text</p>
<h1 class="text-gradient-green">Gradient text</h1>

<!-- Borders -->
<div class="border-primary-500">Green border</div>
```

### Buttons
```html
<!-- Primary -->
<button class="btn btn-primary">Primary Action</button>

<!-- Secondary -->
<button class="btn btn-secondary">Secondary</button>

<!-- Accent -->
<button class="btn btn-accent">Urgent Action</button>

<!-- Outline -->
<button class="btn btn-outline">Outline</button>

<!-- Ghost -->
<button class="btn btn-ghost">Ghost</button>

<!-- Sizes -->
<button class="btn btn-primary btn-sm">Small</button>
<button class="btn btn-primary">Default</button>
<button class="btn btn-primary btn-lg">Large</button>
```

### Cards
```html
<!-- Basic card -->
<div class="card p-6">
  <h3>Card Title</h3>
  <p>Card content</p>
</div>

<!-- Hover effect -->
<div class="card card-hover p-6">
  <h3>Hover me</h3>
</div>

<!-- Green accent -->
<div class="card card-green p-6">
  <h3>With green accent</h3>
</div>
```

### Badges
```html
<span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-accent">Accent</span>
```

### Form Inputs
```html
<!-- Standard input -->
<input type="text" class="input" placeholder="Enter text">

<!-- Error state -->
<input type="text" class="input input-error" placeholder="Error">

<!-- With label -->
<label class="block text-sm font-medium text-secondary-700 mb-2">
  Email Address
</label>
<input type="email" class="input">
```

## 📐 Layout Helpers

### Containers
```html
<!-- Default container -->
<div class="container-default">Content</div>

<!-- Wide container -->
<div class="container-wide">Wide content</div>
```

### Section Spacing
```html
<!-- Standard section -->
<section class="section-padding">
  <div class="container-default">
    <!-- Content -->
  </div>
</section>
```

### Backgrounds
```html
<!-- Green gradient -->
<div class="bg-gradient-green">
  <p class="text-white">Content</p>
</div>

<!-- Soft gradient -->
<div class="bg-gradient-soft">
  <p>Subtle background</p>
</div>
```

## 🎭 Icons & Graphics

### Feature Icons
```html
<div class="feature-icon">
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
          d="M5 13l4 4L19 7" />
  </svg>
</div>
```

### Logo Example
```html
<div class="flex items-center gap-2">
  <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-green">
    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor">
      <!-- Icon path -->
    </svg>
  </div>
  <span class="text-2xl font-bold text-gradient-green">Brand</span>
</div>
```

## 🎬 Animations

### Scroll Animations
```html
<div class="animate-on-scroll">
  <!-- Content animates when scrolled into view -->
</div>

<!-- After scroll into view, add class 'visible' with JavaScript -->
```

### Built-in Animations
```html
<div class="animate-fade-in">Fade in</div>
<div class="animate-slide-up">Slide up</div>
<div class="animate-slide-down">Slide down</div>
<div class="animate-scale-in">Scale in</div>
```

## 📱 Responsive Utilities

### Show/Hide
```html
<!-- Hidden on mobile, visible on desktop -->
<div class="hidden lg:block">Desktop only</div>

<!-- Visible on mobile, hidden on desktop -->
<div class="lg:hidden">Mobile only</div>
```

### Grid Layouts
```html
<!-- Responsive grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <div class="card p-6">Item 1</div>
  <div class="card p-6">Item 2</div>
  <div class="card p-6">Item 3</div>
</div>
```

### Flex Layouts
```html
<!-- Mobile stack, desktop row -->
<div class="flex flex-col lg:flex-row gap-4">
  <div>Column 1</div>
  <div>Column 2</div>
</div>
```

## 🎨 Admin Panel Classes

### Stats Widget
```html
<!-- Filament will apply these automatically -->
.fi-wi-stats-overview-stat
.fi-wi-stats-overview-stat-value
.fi-wi-stats-overview-stat-description
```

### Sidebar Navigation
```html
<!-- Active state automatically applied -->
.fi-sidebar-item
.fi-sidebar-item-active
```

### Buttons in Admin
```html
<!-- Primary action -->
<x-filament::button color="primary">
  Save Changes
</x-filament::button>

<!-- Secondary action -->
<x-filament::button color="secondary">
  Cancel
</x-filament::button>
```

## 🎯 Common Patterns

### Hero Section
```html
<section class="section-padding bg-gradient-green">
  <div class="container-default text-center">
    <h1 class="mb-6 text-white">
      Welcome to Our Platform
    </h1>
    <p class="mb-8 text-lg text-white/90">
      Start your journey today
    </p>
    <button class="bg-white btn btn-lg text-primary-700 hover:bg-accent-500 hover:text-white">
      Get Started
    </button>
  </div>
</section>
```

### Feature Cards
```html
<div class="grid grid-cols-1 gap-6 md:grid-cols-3">
  <div class="text-center card card-hover p-8">
    <div class="feature-icon mx-auto mb-4">
      <!-- Icon -->
    </div>
    <h3 class="mb-2 text-xl font-semibold">Feature Title</h3>
    <p class="text-secondary-600">Feature description goes here</p>
  </div>
  <!-- Repeat for more features -->
</div>
```

### Call-to-Action
```html
<section class="section-padding bg-primary-50">
  <div class="container-default">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="mb-4">Ready to Get Started?</h2>
      <p class="mb-8 text-lg text-secondary-600">
        Join thousands of satisfied customers
      </p>
      <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
        <button class="btn btn-primary btn-lg">
          Start Free Trial
        </button>
        <button class="btn btn-outline btn-lg">
          Learn More
        </button>
      </div>
    </div>
  </div>
</section>
```

### Testimonial Card
```html
<div class="card p-6">
  <div class="flex items-start gap-4 mb-4">
    <img src="avatar.jpg" alt="User" 
         class="w-12 h-12 rounded-full">
    <div>
      <h4 class="font-semibold">John Doe</h4>
      <p class="text-sm text-secondary-600">CEO, Company</p>
    </div>
  </div>
  <p class="text-secondary-700">
    "This platform has transformed our business..."
  </p>
</div>
```

### Form Layout
```html
<form class="space-y-6">
  <div>
    <label class="block mb-2 text-sm font-medium text-secondary-700">
      Full Name
    </label>
    <input type="text" class="input" placeholder="Enter your name">
  </div>
  
  <div>
    <label class="block mb-2 text-sm font-medium text-secondary-700">
      Email Address
    </label>
    <input type="email" class="input" placeholder="you@example.com">
  </div>
  
  <div>
    <label class="block mb-2 text-sm font-medium text-secondary-700">
      Message
    </label>
    <textarea class="input" rows="4" 
              placeholder="Your message"></textarea>
  </div>
  
  <button type="submit" class="w-full btn btn-primary">
    Send Message
  </button>
</form>
```

### Pricing Card
```html
<div class="card card-hover p-8">
  <div class="mb-4">
    <span class="badge badge-primary">Popular</span>
  </div>
  <h3 class="mb-2 text-2xl font-bold">Pro Plan</h3>
  <div class="mb-6">
    <span class="text-4xl font-bold text-primary-600">$29</span>
    <span class="text-secondary-600">/month</span>
  </div>
  <ul class="mb-8 space-y-3">
    <li class="flex items-center gap-2">
      <svg class="flex-shrink-0 w-5 h-5 text-primary-600">
        <!-- Checkmark icon -->
      </svg>
      <span>Unlimited projects</span>
    </li>
    <!-- More features -->
  </ul>
  <button class="w-full btn btn-primary">
    Choose Plan
  </button>
</div>
```

## 🔧 Utility Classes

### Spacing
```html
<!-- Padding -->
<div class="p-4">All sides</div>
<div class="px-6 py-4">Horizontal & Vertical</div>

<!-- Margin -->
<div class="mt-8">Top margin</div>
<div class="mx-auto">Horizontal center</div>
```

### Typography
```html
<h1 class="text-4xl font-bold">Heading 1</h1>
<p class="text-lg font-medium">Medium paragraph</p>
<span class="text-sm text-secondary-600">Small text</span>
```

### Shadows
```html
<div class="shadow-soft">Soft shadow</div>
<div class="shadow-medium">Medium shadow</div>
<div class="shadow-strong">Strong shadow</div>
<div class="shadow-green">Green shadow</div>
```

### Borders
```html
<div class="border border-secondary-200">Border</div>
<div class="border-t-4 border-primary-600">Top border</div>
<div class="rounded-xl">Rounded corners</div>
<div class="rounded-full">Circle</div>
```

### Transitions
```html
<button class="transition-all duration-200 hover:scale-105">
  Hover me
</button>

<div class="transition-colors duration-300 hover:bg-primary-50">
  Color transition
</div>
```

## 💡 Pro Tips

### 1. Always use semantic HTML
```html
<!-- ✅ Good -->
<button class="btn btn-primary">Click me</button>

<!-- ❌ Bad -->
<div class="btn btn-primary">Click me</div>
```

### 2. Mobile-first responsive
```html
<!-- ✅ Good - mobile first -->
<div class="text-base lg:text-lg">Text</div>

<!-- ❌ Bad - desktop first -->
<div class="lg:text-lg text-base">Text</div>
```

### 3. Use design system colors
```html
<!-- ✅ Good -->
<div class="bg-primary-600">Content</div>

<!-- ❌ Bad -->
<div class="bg-[#16A34A]">Content</div>
```

### 4. Consistent spacing
```html
<!-- ✅ Good - using scale -->
<div class="mb-6">Section</div>
<div class="mb-6">Section</div>

<!-- ❌ Bad - random values -->
<div class="mb-5">Section</div>
<div class="mb-7">Section</div>
```

---

## 📚 More Resources

- Full documentation: `REDESIGN_NOTES.md`
- Admin panel guide: `ADMIN_PANEL_REDESIGN.md`
- Complete summary: `COMPLETE_REDESIGN_SUMMARY.md`
- Tailwind docs: https://tailwindcss.com/docs
- Filament docs: https://filamentphp.com/docs

**Happy coding! 🚀**
