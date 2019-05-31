import { Pipe, PipeTransform } from '@angular/core';
import { Project } from 'src/app/api/class/project';
@Pipe({
  name: 'filter'
})
export class FilterPipe implements PipeTransform {
  transform(projects: Project[], searchText: string): Project[] {
    if(!projects || !searchText)
    {
      return projects
    }
    return projects.filter(Project => 
      Project.name.toLowerCase().indexOf(searchText.toLowerCase()) !== -1);
   }
}
